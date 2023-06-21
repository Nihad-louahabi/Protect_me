<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block ;
        }
        .card{

            width: 900px;margin-left: 260px;
            margin-top: 20px
        }

    </style>
    <style>
        .tabl{margin-top: -15px;
            margin-left: 150px;
            line-height: 30px;
            border: 1px ;
            width: 150px;
            position: absolute;
        }
        .tabl :hover{
            font-size: 23px
        }

         li{
            list-style: none;
        }
        table{
            border: 1rem solid;
        }
    </style>

    <main class="main">
        <div class="slid">
            <div class="tabl">
                <table  >

                    <ul class="sub-menu">
                    <tr><li><a href="{{route('admin.dashboard')}}">Tableau de bord</a></li></tr><hr>
                    <tr><li><a href="{{route('admin.categories')}}">Catégories</a></li></tr><hr>
                    <tr><li><a href="{{route('admin.animals') }}">Animaux</a></li></tr><hr>



                </ul>
                </table>
            </div>






        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class ="card">
                            <div class ="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Tous les animaux
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.animal.add')}} "class="btn btn-success float-end">Ajouter Animal</a>
                                    </div>
                            </div>
                            <div class ="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                                @endif
                                <table class="table tabel-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Race</th>
                                            <th>Age	</th>
                                            <th>Catégorie</th>
                                            <th>Créé à</th>
                                            <th>Action</th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        @php
                                            $i = ($animals->currentPage()-1)*$animals->perPage();                                        @endphp
                                        @foreach ( $animals as $animal )
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td><img  src="{{ asset('assets/imgs/animals')}}/{{ $animal->image}}" alt="{{$animal->name}}" width="60"></td>
                                            <td>{{$animal ->name}}</td>
                                            <td>{{$animal ->race}}</td>
                                            <td>{{$animal ->age}}</td>
                                            <td>{{$animal ->category->name}}</td>
                                            <td>{{$animal ->created_at}}</td>

                                            <td>
                                                <a  href="{{route('admin.animal.edit',['animal_id'=>$animal->id])}}" class="text-info">Modifier</a>
                                                <a  href="#" onclick="deleteConfirmation({{$animal->id}})" class="text-danger"> Supprimer </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{$animals->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> Voulez-vous supprimer cet enregistrement ?</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"  data-bs-target="#deleteConfirmation" >Annuler</button>
                        <button type="button" class="btn btn-danger" onclick="deleteAnimal()">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @push('scripts')
        <script>
            function deleteConfirmation(id){
                @this.set('animal_id',id);
                $('#deleteConfirmation').modal('show');
            }
            function  deleteAnimal()
                {
                    @this.call('deleteAnimal');
                    $('#deleteConfirmation').modal('hide');
                }

        </script>

    @endpush
