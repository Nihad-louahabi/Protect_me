<style>
    .tabl{margin-top: 35px;
        margin-left: 150px;
        line-height: 30px;
        border: 1px ;
        width: 150px;
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



<div class="slid">
    <div class="tabl">
        <table  >

            <ul class="sub-menu">
            <tr><li><a href="{{route('admin.dashboard')}}">Tableau de bord</a></li></tr><hr>
            <tr><li><a href="{{route('admin.categories')}}">Catégories</a></li></tr><hr>
            <tr><li><a href="{{ route('admin.animals') }}">Animaux</a></li></tr>

        </ul>
        </table>
    </div>



<div>
