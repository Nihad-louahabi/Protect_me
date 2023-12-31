<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block ;
        }

    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Accueil</a>
                    <span></span>    Ajouter catégorie
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class ="card">
                            <div class ="card-header">
                                <div class ="row">
                                    <div class="col-md-6">
                                        Ajouter catégorie
                                    </div>
                                    <div class="col-md-6" >
                                        <a href="{{route('admin.categories' )}}" class="btn btn-success float-end">Toutes catégories</a>
                                    </div>
                                </div>
                            </div>
                            <div class ="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                            {{Session::get('message') }}
                                    </div>
                                @endif
                                <form wire:submit.prevent="storeCategory">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Nom</label>
                                        <input type="text"  name="name" class="from-control" placeholder="Entrez  catégorie  nom  " wire:model="name" wire:model="generateSlug">
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="Slug" class="form-label">Slug</label>
                                        <input type="text" name="slug"  class="from-control" placeholder="Entrez  catégorie slug " wire:model="slug">
                                        @error('slug')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="Image" class="form-label">Image</label>
                                        <input type="file"  class="from-control"  wire:model="image">
                                        @error('image')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        @if($image)
                                            <img src="{{ $image->temporaryUrl()}}"  width="120"/>
                                        @endif
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="is_popular" class="form-label">Popular</label>
                                        <select class="from-control'"name="is_popular" wire:model="is_popular">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>

                                        @error('is_popular')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end" > Submit </button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

