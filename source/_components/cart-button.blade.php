

<div x-data="cartButton()">
    <span x-show="count" x-text="count"></span>
    <a href="#!/~/cart">
        <img src="/assets/images/cart.png" alt="">
    </a>
</div>

@push('script')
    <script>
        function cartButton() {
            return {
                count: 0,
                init() {
                    Ecwid.OnCartChanged.add(cart => {
                        this.count = cart.productsQuantity;
                    });
                }
            }
        }
    </script>
@endpush
