<style>
    .signin_content a{
        display: flex;
        align-items: center;
        width: var(--navbar-icon-size);
        height: var(--navbar-icon-size);
        margin-left: calc((var(--side-inactive-width) - var(--navbar-icon-size))/2);
        margin-bottom: 10px;
        text-decoration: none;
        border-radius:12px;
    }
    .sidebar.active .signin_content a{
        width: calc(var(--side-active-width) - 2*(var(--side-inactive-width) - var(--navbar-icon-size))/2);
    }
    .signin_content a:hover{
        background: rgb(154, 170, 192);
        color: var(--dark-color);
    }
    .signin_content a .btn{
        background: var(--dark-color);
        color: rgb(154, 170, 192);
        cursor: pointer;
        border: none;
        height: var(--navbar-icon-size);
        min-width: var(--navbar-icon-size);
        line-height: 0;
        border-radius:12px;
    }
    .signin_content a:hover .btn{
        background: rgb(154, 170, 192);
        color: var(--dark-color);
    }
    .signin_content a .text{
        opacity: 0;
        color: rgb(154, 170, 192);
    }
    .sidebar.active .signin_content a .text{
        opacity: 1;
    }
    .signin_content a:hover .text{
        background: rgb(154, 170, 192);
        color: var(--dark-color);
    }
    
</style>


<div class="signin_content">
    <a href="includes/signin.php">
        <button class="btn">
            <i class="material-icons">login</i>
        </button>
        <div class="text">Sign in</div>
    </a>
</div>