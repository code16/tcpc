@extends('_layouts.default')

@section('main')
    <div id="my-store-71383778"></div>

    {{-- product list --}}
    <template x-data="shopElement">
        <div class="grid-product__sku-inner" x-data="{ ref: $el.innerText.match(/\d+/)[0] }">
            TCPC#<span x-data x-text="ref"></span> / Édition
        </div>
    </template>

    <template x-data="shopElement">
        <div class="grid-product__title-inner" x-data="{ matches: $el.innerText.match(/([^/]+)\/?(.+)?/) }">
            <div x-data x-text="matches[1]"></div>
            <div x-data x-text="matches[2]" style="font-size: .5em"></div>
        </div>
    </template>

    {{-- product page --}}
    <template x-data="shopElement">
        <h1 class="product-details__product-title" x-data="{ matches: $el.innerText.match(/([^/]+)\/?(.+)?/) }">
            <div x-data x-text="matches[1]"></div>
            <div x-data x-text="matches[2]" style="font-size: .5em"></div>
        </h1>
    </template>

    <template x-data="shopElement">
        <div class="details-product-purchase__add-to-bag form-control form-control--button form-control--large form-control--secondary form-control--flexible form-control--animated form-control__button--icon-center form-control--done">
            <button class="form-control__button" type="button">
                <span class="form-control__button-text">add to cart</span>
                <span class="form-control__button-svg"><span class="svg-icon"><svg width="27" height="23" viewBox="0 0 27 23" xmlns="http://www.w3.org/2000/svg"><path class="svg-line-check" d="M1.97 11.94L10.03 20 25.217 2" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="3" stroke-linecap="round"></path></svg></span></span>
            </button>
        </div>
    </template>

    <template x-data="shopElement">
        <div class="details-product-purchase__add-more form-control form-control--button form-control--large form-control--secondary form-control--flexible form-control--animated form-control__button--icon-center form-control--done">
            <button class="form-control__button" type="button">
                <span class="form-control__button-text">add to cart</span>
                <span class="form-control__button-svg"><span class="svg-icon"><svg width="27" height="23" viewBox="0 0 27 23" xmlns="http://www.w3.org/2000/svg"><path class="svg-line-check" d="M1.97 11.94L10.03 20 25.217 2" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="3" stroke-linecap="round"></path></svg></span></span>
            </button>
        </div>
    </template>

    {{-- cart --}}
    <template x-data="shopElement">
        <a class="ec-cart-item__title" x-data="{ matches: $el.innerText.match(/([^/]+)\/?(.+)?/) }">
            <div x-data x-text="matches[1]"></div>
        </a>
    </template>

    <template x-data="shopElement">
        <div class="ec-cart__shopping ec-cart-shopping">
            <slot></slot>
            <div class="text-end">
                <a class="form-control__button ec-link d-inline-block w-auto" href="/">
                    Mettre à jour le panier
                </a>
            </div>
        </div>
    </template>
@endsection

@push('script')
    <script>
        window.ec = {
            storefront: {
                product_details_cut_product_description_in_sidebar: false,
            },
        }
    </script>
    <script data-cfasync="false" src="https://app.ecwid.com/script.js?71383778&data_platform=code&data_date=2022-03-01"></script>
    <script> xProductBrowser("categoriesPerRow=3","views=grid(20,3) list(60) table(60)","categoryView=grid","searchView=list","id=my-store-71383778");</script>
    <script>
        function shopElement() {
            return {
                init() {
                    const root = this.$el.content.firstElementChild;
                    Ecwid.OnPageLoaded.add(() => {
                        setTimeout(() => {
                            const elements = [...document.querySelectorAll(`.${root.classList.item(0)}`)];
                            elements.forEach(el => {
                                const html = this.$el.innerHTML.replace(/\s*<slot><\/slot>\s*/, el.innerHTML);
                                Alpine.morph(el, html);
                            });
                        }, 50);
                    });
                }
            }
        }
    </script>
@endpush
