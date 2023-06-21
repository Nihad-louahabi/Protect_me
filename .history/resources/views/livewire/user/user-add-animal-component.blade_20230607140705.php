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
                    <span></span>   Ajouter un Animal
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
                                        Ajouter un Animal
                                    </div>
                                    <div class="col-md-6" >
                                        <a href="{{route('user.animals' )}}" class="btn btn-success float-end">Tous les animaux</a>
                                    </div>
                                </div>
                            </div>
                            <div class ="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                            {{Session::get('message') }}
                                    </div>
                                @endif
                                <form wire:submit.prevent="addAnimal">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Nom</label>
                                        <input type="text"  name="name" class="from-control" placeholder="Entrez animal nom  " wire:model="name" wire:model="generateSlug">
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="Slug" class="form-label">Slug</label>
                                        <input type="text" name="Slug"  class="from-control" placeholder="Entrez animal Slug " wire:model="slug">
                                        @error('slug')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="race" class="form-label">Race</label>
                                        <input type="text" class="from-control"  name="race"  placeholder="Entrez animal race " wire:model="race"></textarea>
                                        @error('race')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="description" class="form-label"> Description</label>
                                        <textarea class="from-control"  name="description"  placeholder="Entrez animal description " wire:model="description"></textarea>
                                        @error('description')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="text" name="age"  class="from-control" placeholder="Entrez animal  age " wire:model="age">
                                        @error('age')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="sexe" class="form-label">Sexe</label>
                                        <select class="from-control" name="sexe" wire:model="sexe" >
                                            <option value="Mâle">Mâle</option>
                                            <option  value="Femelle">Femelle</option>

                                        </select>
                                        @error('sexe')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="race" class="form-label">Race</label>
                                        <input type="text" class="from-control"  name="race"  placeholder="Entrez animal race " wire:model="race"></textarea>
                                        @error('race')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="featured" class="form-label">Futur</label>
                                        <select class="from-control" name="featured" wire:model="featured">
                                            <option value="0">No</option>
                                            <option  value="1">Yes</option>

                                        </select>
                                        @error('featured')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image"  class="from-control" wire:model="image" >
                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                        @endif
                                        @error('image')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-label">Catégorie</label>
                                        <select class="category_id" name="category_id" wire:model="category_id">
                                            <option value="">Sélectionner
                                                une catégorie</option>
                                            @foreach($categories as $category)
                                                 <option value="{{$category->id}}">{{$category->name}}</option>

                                            @endforeach

                                        </select>
                                        @error('category_id')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                    <button type="submit" class="btn btn-primary float-end" > Soumettre </button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

