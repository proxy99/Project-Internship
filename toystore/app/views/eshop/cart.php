<?php $this->view("header", $data); ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<section class="container content-section" style="padding-bottom: 30px;">
					<div class="cart-row">
						<span class="cart-item-1 cart-header cart-column">ITEM</span>
						<span class="cart-item-2 cart-header cart-column">PRODUCT NAME</span>
						<span class="cart-item-3 cart-header cart-column">PRICE</span>
						<span class="cart-item-4 cart-header cart-column">QUANTITY</span>
						<span class="cart-item-5 cart-header cart-column">TOTAL</span>
						<span class="cart-item-6 cart-header cart-column"></span>
					</div>

					<?php if($ROWS): ?>
					<?php foreach($ROWS as $row): ?>
						<div class="cart-items">
							<div class="cart-row">
								<div class="cart-item-1 ">
									<img class="cart-item-image" src="<?=ROOT?><?=$row->image?>">
								</div>
								<div class="cart-item-2 cart-column-product">
									<span class="cart-item-title"><?=$row->description?></span>
								</div>
								<div class="cart-item-3 cart-column-product">
									<span class="cart-item-price">$<?=$row->price?></span>
								</div>
								<div class="cart-item-4 cart-column-product">
									<a class="cart_quantity_up" href="<?=ROOT?>add_to_cart/add_quantity/<?=$row->id?>"> + </a>
									<input oninput="edit_quantity(this.value,'<?=$row->id?>')" class="cart-quantity-input" type="text" name="quantity" value="<?=$row->cart_qty?>">
									<a class="cart_quantity_down" href="<?=ROOT?>add_to_cart/subtract_quantity/<?=$row->id?>"> - </a>
								</div>
								<div class="cart-item-5 cart-column-product">
									<span class="cart-item-total"><?=$row->price * $row->cart_qty?></span>
								</div>
								<div class="cart-item-6 cart-column-product">
									<a class="btn btn-remove" delete_id="<?=$row->id?>" onclick="delete_item(this.getAttribute('delete_id'))" type="button" href="<?=ROOT?>add_to_cart/remove/<?=$row->id?>">remove</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					<?php else: ?>
						<div class = "cart-no-item">
							<h3>There are nothing in your cart</h3>
						</div>
					<?php endif; ?>
					<div class="pull-right">
						<h3> Sub Total: <span style="color: var(--blue-3)">$<?=number_format($sub_total,2)?></span></h3>
					</div>
				</section>
				
				<a href="<?=ROOT?>checkout">
					<input type="button" class="btn btn-default check_out pull-right" value="Checkout >" name="">
				</a>
				<a href="<?=ROOT?>shop">
					<input type="button" class="btn btn-default return pull-left" value="< Continue shopping" name="">
				</a>

			</div>
		</div>
	</section> <!--/#cart_items-->

<script type="text/javascript">
	function edit_quantity(quantity, id) {

		if(isNaN(quantity)) 
			return;
		
		send_data({
			quantity:quantity.trim(),
			id:id.trim()
		}, "edit_quantity");
	}

	function delete_item(id) {

		send_data({
			id:id.trim()
		}, "delete_item");
	}

	function send_data(data = {}, data_type) {

		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function(){
			if(ajax.readyState == 4 && ajax.status == 200) {
				handle_result(ajax.responseText);
			}
		});

		ajax.open("POST", "<?=ROOT?>ajax_cart/" + data_type + "/" + JSON.stringify(data),true);
		ajax.send();
	}

	function handle_result(result) {
		console.log(result);
		if(result != "") {
			var obj = JSON.parse(result);

			if(typeof obj.data_type != 'undefined') {
				if(obj.data_type == "delete_item") {
					window.location.href = window.location.href;
				}
				else if(obj.data_type == "edit_quantity") {
					window.location.href = window.location.href;
				}
			}
		}
	}

</script>
<?php $this->view("footer", $data); ?>