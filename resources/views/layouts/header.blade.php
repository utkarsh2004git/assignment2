<header>
    <nav class="p-6 bg-gray-100 flex items-center  justify-between">
            <div class="flex bg-orange-600 p-2 rounded-lg cursor-pointer hover:scale-110 transition-all hover:bg-mycolor" > 
                <a href="{{url('/')}}" style="text-decoration: none" ><p class="text-2xl text-semibold text-gray-200">Utkarsh</p></a>
            </div>
            <div class="font-bold text-2xl ">
                <x-Navitem url="/" title="Home" />
                @if(session()->has('loginId'))

                <x-Navitem url="/allposts" title="All-Post" />
                <x-Navitem url="/create-post" title="Create-Post" />
                <x-Navitem url="/admin/admin-view" title="Admins" />

                
                @endif
                
                @if(!session()->has('loginId'))
                <x-Navitem url="/admin/login" title="Log in" />
                <x-Navitem url="/admin/register" title="Register" />
                
                @endif
                @if(session()->has('loginId'))
                <x-Navitem url="/logout" title="Logout" />
                @endif
            </div>
    </nav>
</header>