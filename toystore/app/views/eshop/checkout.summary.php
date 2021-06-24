<?php $this->view("header", $data); ?>

<style type="text/css">
	.table {
		border-collapse: unset;
	}

	.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
		vertical-align: middle;
	}
</style>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
	<!-- Alert error -->
	<?php

	if(isset($errors) && count($errors) > 0) {

		foreach($errors as $error) {
			echo "<div class='alert alert-danger' style='padding: 15px; max-width:500px; margin: auto; text-align: center;'>$error</div>";
		}
	}

	?>
	<!-- End of alert error -->
		<?php if(is_array($orders)): ?>

			<div class="register-req">
				<p style="text-align: center">Please confirm your payment information</p>
			</div><!--/register-req-->

					<?php foreach($orders as $order): ?>
						<?php $order = (object)$order; ?>
								<div class="js-order-details details">
					
									<!-- Order Details -->
									<div style="display: flex;">
										<table class="table" style="flex: 1; margin: 10px;"> 
											<tr><th>Country</th><td><?=$order->country?></td></tr>
											<tr><th>State</th><td><?=$order->state?></td></tr>
											<tr><th>Delivery Address 1</th><td><?=$order->address1?></td></tr>
											<tr><th>Delivery Address 2</th><td><?=$order->address2?></td></tr>
											
										</table>
										<table class="table" style="flex: 1; margin: 10px;">
											<tr><th>Zip/Postal Code</th><td><?=$order->postal_code?></td></tr>
											<tr><th>Home Phone</th><td><?=$order->home_phone?></td></tr>
											<tr><th>Mobile Phone</th><td><?=$order->mobile_phone?></td></tr>
											<tr><th>Date</th><td><?=date("Y-m-d")?></td></tr>
										</table>
									</div>
										<table style="width: 100%;background-color: #eee;"><tr><td style="text-align: center;padding: 16px;"><?=$order->message?></td></tr></table>
									<hr>
									<h4>Order Summary</h4>
									<table class="table">
										<thead>
											<tr>
												<th>Quantity</th>
												<th>Description</th>
												<th>Amount</th>
												<th>Total</th>
											</tr>
										</thead>
										<?php if(isset($order_details) && is_array($order_details)): ?>
											<?php foreach($order_details as $detail): ?>
												<tbody>
													<tr>
														<td><?=$detail->cart_qty?></td>
														<td><?=$detail->description?></td>
														<td style="color: #85BB65">$ <?=$detail->price?></td>
														<td style="color: #85BB65">$ <?=($detail->cart_qty * $detail->price)?></td>
													</tr>
												</tbody>
											<?php endforeach; ?>
											
										<?php else: ?>
											<div style="text-align: center;padding: 15px 0;">No order details were found for this order</div>
										<?php endif; ?>
									</table>
									<h3 class="pull-right">Grand Total: <span style="color: #85BB65">$<?=$sub_total?></span></h3>
								</div>
					<?php endforeach; ?>

			<?php else: ?>
				<h3 style="text-align: center;">
					Please add some products in your cart first!
				</h3>
			<?php endif; ?>
			<hr style="clear: both;">
			<a href="<?=ROOT?>checkout">
				<input type="button" class="btn btn-default return pull-left" value="< Back to checkout" name="">
			</a>
			<form method="post">
				<input type="submit" class="btn btn-default check_out pull-right" value="Pay >" name="">
			</form>
		</div>
	</section> <!--/#cart_items-->

<script type="text/javascript">

	function get_states(id) {

		send_data({
			id:id.trim()
		}, "get_states");
	}

	function send_data(data = {}, data_type) {

		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function(){
			if(ajax.readyState == 4 && ajax.status == 200) {
				handle_result(ajax.responseText);
			}
		});

		ajax.open("POST", "<?=ROOT?>ajax_checkout/" + data_type + "/" + JSON.stringify(data),true);
		ajax.send();
	}

	function handle_result(result) {

		console.log(result);
		if(result != "") {
			var obj = JSON.parse(result);

			if(typeof obj.data_type != 'undefined') {

				if(obj.data_type == "get_states") {
					
					var select_input = document.querySelector(".js-state");
					select_input.innerHTML = "<option>-- State / Province / Region --</option>";

					for(var i = 0; i < obj.data.length; i++) {
		
						select_input.innerHTML += "<option value='"+obj.data[i].id+"'>"+obj.data[i].state+"</option>";
					}
				}

			}
		}
	}

</script>

<?php $this->view("footer", $data); ?>