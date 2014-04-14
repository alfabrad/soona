{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if isset($products)}


	<!-- Products list -->
	<ul id="product_list" class="clearfix">
	{foreach from=$products item=product name=products}
				
	<li class="ajax_block_product clearfix">
		<div class="product-block">
			<div class="product-block-inner">
		
			<div class="left_block">
				<!-- ======= Compare ==== -->
				{if isset($comparator_max_item) && $comparator_max_item}
					<p class="compare">
						<input type="checkbox" class="comparator" id="comparator_item_{$product.id_product}" value="comparator_item_{$product.id_product}" {if isset($compareProducts) && in_array($product.id_product, $compareProducts)}checked="checked"{/if} autocomplete="off"/> 
						<label for="comparator_item_{$product.id_product}">{l s='Compare'}</label>
					</p>
				{/if}
				<div class="product-image-thumb">
					<a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_img_link" title="{$product.name|escape:'htmlall':'UTF-8'}">
						<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} />
						{if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if}
					</a>
				</div>
				<!-- ======= Reduced Price and On sale ==== -->
				{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
					<span class="on_sale">{l s='On sale!'}</span>
				{elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
					<span class="discount">{l s='Reduced price!'}</span>
				{/if}
			</div>
			<div class="center_block">
			
				<h3>{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}<a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:30:'...'|escape:'htmlall':'UTF-8'}</a></h3>
				<p class="product_desc"><a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}" >{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}</a></p>
				
				<!-- ======= Compare ==== -->
				{if isset($comparator_max_item) && $comparator_max_item}
					<p class="compare">
						<input type="checkbox" class="comparator" id="comparator_item_{$product.id_product}" value="comparator_item_{$product.id_product}" {if isset($compareProducts) && in_array($product.id_product, $compareProducts)}checked="checked"{/if} autocomplete="off"/> 
						<label for="comparator_item_{$product.id_product}">{l s='Compare'}</label>
					</p>
				{/if}
				<!-- ========= Available ==== -->
				{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
				<div class="content_price">
					{if isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}<span class="availability">{if ($product.allow_oosp || $product.quantity > 0)}{l s='Available'}{elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}{l s='Product available with different options'}{else}{l s='Out of stock'}{/if}</span>{/if}
				</div>
				{/if}
				
				
			</div>
			<div class="right_block">
				<!-- ======= Reduced Price and On sale ==== -->
				{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
					<span class="on_sale">{l s='On sale!'}</span>
				{elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
					<span class="discount">{l s='Reduced price!'}</span>
				{/if}
				
				{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
					<div class="content_price">
						{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}<span class="price" style="display: inline;">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span><br />{/if}
					</div>
					{if isset($product.online_only) && $product.online_only}<span class="online_only">{l s='Online only'}</span>{/if}
				{/if}
											
				{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
					{if ($product.allow_oosp || $product.quantity > 0)}
						{if isset($static_token)}
							<a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html'}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
						{else}
							<a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)|escape:'html'}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
						{/if}						
					{else}
						<span class="exclusive"><span></span>{l s='Add to cart'}</span><br />
					{/if}
				{/if}
			</div>
		</div>
		</div>
		</li>
	{/foreach}
	</ul>
<script>
{literal}
// <![CDATA[

$(document).ready(function () {
    $("#view_as_grid").click(function () {
		setListGrid('grid_view');
		$('ul.grid_view').smartColumnsRows({
				defWidthClss : 'grid_default_width',
				subElement   : 'li',
				subClass     : 'product-block'
		});	
		
	});
	$("#view_as_list").click(function () {
		setListGrid('list_view');
		
		$("ul.product_list").css('width', 'auto'); 
		$(".list_view li").css('width', '100%'); 
		$(".list_view li").css('height', 'auto'); 
		$('.list_view .product-block').css("height", "auto");
		$('.list_view .product-block').css("width", "auto");		
	});
}); 

productListAutoSet = function() { 
	$('ul.grid_view').smartColumnsRows({
		defWidthClss : 'grid_default_width',
		subElement   : 'li',
		subClass     : 'product-block'
	});
}
$(document).ready(productListAutoSet);
$(window).bind('resize', productListAutoSet);

//]]>
{/literal}
</script>		
	<!-- /Products list -->
{/if}
