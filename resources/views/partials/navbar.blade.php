<style>
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    }

    li {
    float: left;
    }

    li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li a:hover, .dropdown:hover .dropbtn {
    background-color: LightCoral;
    }

    li.dropdown {
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    }

    a {
     color: black;
     font-weight: bold
    }

    .dropdown-content a:hover {background-color: Gainsboro;}

    .dropdown:hover .dropdown-content {
    display: block;
    }

    .dropbtn{
        font-family: "Cambria";
        font-size: 16px;
        color: black;
        background: linear-gradient(red, LightSalmon, red);
    }

</style>


<div class="dropdown">
    <button class="dropbtn"> 
        <a href="/"> 
          Home / Navbar
        </a>
    </button>
    <div class="dropdown-content">
        <a href="/moviereview">Movie Review</a>
        <a href="/about">About</a>
    </div>
</div>