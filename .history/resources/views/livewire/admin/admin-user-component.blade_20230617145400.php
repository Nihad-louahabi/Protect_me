
@yield('livewire-content')
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
                        <a href="/" rel="nofollow">Home</a>
                        <span></span> All Users
                    </div>
                </div>
            </div>
            <section class="mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class ="card">
                                <div class ="card-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            All Users
                                        </div>
                                </div>
                                <div class="row">
                                </div>

                                <div class ="card-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                                    @endif
                                    <table class="table tabel-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="4">
                                                    List Of Users
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $user as $userr )
                                            <tr>
                                                <td>{{$userr->id}}</td>
                                                <td>{{$userr->name}}</td>
                                                <td>{{$userr->email}}</td>

                                                <td>
                                                    <a href="#" class="text-danger" onclick="deleteConfirmation({{$userr->id}})" style="margin-left:20px">Delete</a>
                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
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
                            <h4 class="pb-3"> Do you want to delete this record?</h4>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"  data-bs-target="#deleteConfirmation" >Cancel</button>
                            <button type="button" class="btn btn-danger" onclick=" deleteUser()">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @push('scripts')
            <script>
                function deleteConfirmation(id){
                    @this.set('user_id',id);
                    $('#deleteConfirmation').modal('show');
                }
                function deleteUser()
                    {
                        @this.call('deleteUser');
                        $('#deleteConfirmation').modal('hide');
                    }

            </script>

        @endpush




