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
*w
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
                    <!-- Block user information module HEADER -->
                    <div class="welcome_link">
                        <p id="header_user_info">
                            {if $logged}
                            <a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout" rel="nofollow">{l s='Log out' mod='blockuserinfo'}</a>
                            <a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="your_account" rel="nofollow">{l s='Your Account' mod='blockuserinfo'}</a>
                            {else}
                            <a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Login to your customer account' mod='blockuserinfo'}" class="login" rel="nofollow">{l s='Login' mod='blockuserinfo'}</a>
                            {/if}
                        </p>
                    </div>
                    <div class="block_userinfo">
                        <div id="header_user" {if $PS_CATALOG_MODE}class="header_user_catalog"{/if}>
                            <div class="shopping_cart_header clearfix">
                                <ul id="header_nav">
                                    {if !$PS_CATALOG_MODE}
                                    <li id="shopping_cart">
                                        <div class="ajax_cart_a">{l s='Cart' mod='blockuserinfo'}
                                            <span class="ajax_cart_quantity{if $cart_qties == 0} hidden{/if}">{$cart_qties}</span>
                                            <span class="ajax_cart_product_txt{if $cart_qties != 1} hidden{/if}">{l s='Product' mod='blockuserinfo'}</span>
                                            <span class="ajax_cart_product_txt_s{if $cart_qties < 2} hidden{/if}">{l s='Products' mod='blockuserinfo'}</span>
                                            <span class="ajax_cart_total{if $cart_qties == 0} hidden{/if}">
                                            {if $cart_qties > 0}
                                                {if $priceDisplay == 1}
                                                    {assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
                                                    {convertPrice price=$cart->getOrderTotal(false, $blockuser_cart_flag)}
                                                {else}
                                                    {assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
                                                    {convertPrice price=$cart->getOrderTotal(true, $blockuser_cart_flag)}
                                                {/if}
                                            {/if}
                                            </span>
                                            <span class="ajax_cart_no_product{if $cart_qties > 0} hidden{/if}">{l s='(empty)' mod='blockuserinfo'}</span>
                                        </div>
                                    </li>
                                    {/if}
                                </ul>
                                <img src="{$img_dir}soona_img/images_soona/visa.png" alt="Logo Visa" width="25" height="15" id="visa_logo_cart" />
                                <img src="{$img_dir}soona_img/images_soona/mastercard.png" alt="Logo Mastercard" width="31" height="18" id="mastercard_logo_cart" />
                                <img src="{$img_dir}soona_img/images_soona/paypal.png" alt="Logo PayPal" width="41" height="11" id="paypal_logo_cart" />
                            </div>
                        </div>
                    </div>
                    <!-- /Block user information module HEADER -->
