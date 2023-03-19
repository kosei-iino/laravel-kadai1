<div>Laravel</div>
<div class="change-login">
    <div class="gnavi__wrap">
        <ul class="gnavi-lists">
            <li class="gnavi-list">
                <a href="#">{{$name}}</a>
                <ul class="dropdown-lists">
                     <li class="dropdown-list"><a href="{{ url('/') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<style>
.dropdown-lists {
    display: none;
    position: absolute;
    width: 150px;
    top: 40px;
    right: 0;
    list-style: none;
}
.gnavi-list{
    list-style: none;
}
.gnavi-list:hover .dropdown-lists {
    display: block;
}
.dropdown-list {
    background-color: #fff;
    height: 30px;
    border:solid 1px;
}
.dropdown-lists a {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #000;
    text-decoration: none;
    position: relative;
}
</style>