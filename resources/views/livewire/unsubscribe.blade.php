@section('page_title_meta')
    <title>Skoonters - Unsibscribe</title>
    <meta name="description" content="Skoonters is a Papua New Guinea software company that provides software development services that specialize in Websites and Mobile Apps. We offer custom built software built from the ground up tailored to each customer.">
@endsection

<div class="pt-6 md:pt-20 px-6 md:px-20 pb-10 md:pb-32 md:px-30 text-gray-200">
    <div class="flex justify-center">
        <img class=" md:w-1/3" src="{{ asset('imgs/crying-anime-girl.jpg') }}" alt="Crying girl">
    </div>

    <div class="flex justify-center pt-4 md:pt-10">
        <div class="glass md:w-2/3 text-center px-4 py-6 text-lg pb-10">
            <div style="font-family: 'Orbitron', sans-serif;" class="text-center text-2xl md:text-3xl text-purple-900 font-extrabold">
                Sorry to see you go!
            </div>
            <div class="pt-10 font-extrabold">
                Safe travels and we hope you'll explore the world with us again soon.
            </div>
            <div class="pt-6 text-sm">
                If this is a mistake (thank god), then you can safely disregard this.
            </div>
            <div class="pt-3 text-sm">
                Otherwise, please click the link below to unsubscribe from our Newsletters.
            </div>

            <div class="pt-6 text-sm text-pink-950">
                You will be unsubscribing email <span class="text-blue-200">{{ $email }}</span> from all future correspondence from us.
            </div>
            <div class="pt-6">
                @if ($unsubscribed == false)
                    <button wire:click="unsubscribe" wire:loading.attr="disabled" class="codepen-button"><span>Unsubscribe</span></button>
                @endif
                @if ($unsubscribed == true)
                    <button wire:click="resubscribe" wire:loading.attr="disabled" class="codepen-button"><span>Resubscribe</span></button>
                @endif
            </div>
            <div class="pt-8 h-10 text-sm font-extrabold">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
                @if ($unsubscribed == true)
                    You have been successfully unsubscribed.
                @endif
                @if ($resubscribed == true)
                    Welcome back! You have been successfully resubscribed.
                @endif
            </div>
        </div>
    </div>
</div>
