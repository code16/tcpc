@extends('_layouts.default')

@section('main')
    <div id="my-store-71383778"></div>

    <template x-data="shopElement">
        <div class="grid-product__sku-inner" x-data="{ ref: $el.innerText.match(/\d+/)[0] }">
            TCPC#<span x-data x-text="ref"></span> - Édition
        </div>
    </template>
@endsection

@push('script')
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
                                Alpine.morph(el, this.$el.innerHTML);
                            });
                        }, 100);
                    });
                }
            }
        }
    </script>
@endpush
