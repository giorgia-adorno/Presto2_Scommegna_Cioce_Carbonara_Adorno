<x-layout>
    <div style="background: linear-gradient(135deg, #1c483c 0%, #1a3028 100%); min-height: 100vh; padding-bottom: 60px;">
        <div class="container">
            <div class="row justify-content-center text-center" style="padding-top: 60px; padding-bottom: 40px;">
                <div class="col-12">
                    <span class="section-label">Nuovo Annuncio</span>
                    <h1 class="fw-bold mt-2" style="color: #fff; font-family: 'Poppins', sans-serif; font-size: 42px;">
                        Pubblica un annuncio
                    </h1>
                    <div class="mx-auto mt-3" style="width: 60px; height: 3px; background-color: #d4a843;"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <livewire:create-article-form />
                </div>
            </div>
        </div>
    </div>
</x-layout>