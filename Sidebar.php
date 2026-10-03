<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <title>Document</title>
</head>
<body>

</html>

<div class="sidebar-container">

<div class="sidebar-user">
        <div class="user-info">
            <span class="user-name">Pogi</span>
            <div>
                <button onclick="toggleSideBar()" id="toggle-Btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M440-280v-400L240-480l200 200Zm80 160h80v-720h-80v720Z"/></svg>        
                </button>
            </div>
        </div>
</div>

<div id="role">
<span class="user-role">Admin</span>
</div>

    <nav id="sideBar">
        <ul class="sideBar">
                <li class="active">
                    <a style="border-left: 2px solid #fca311;" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#fca311"><path d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
                    <span>Dashboard</span>
                    </a>
                </li>

            <ul>
                <button onclick="toggleSubMenu(this)" class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#fca311"><path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/></svg>
                    <span>Inventory</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>
                
                <ul class="sub-menu">
                    <div>
                    <li><a href="#"><span>View Stocks</span></a></li>
                    <li><a href="#"><span>Add Product</span></a></li>
                    <li><a href="#"><span>Categories</span></a></li>
                    </div>
                </ul>
            </ul>
            
            <ul>
                <button onclick="toggleSubMenu(this)" class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#fca311"><path d="M160-160v-516L82-846l72-34 94 202h464l94-202 72 34-78 170v516H160Zm240-280h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z"/></svg>
                    <span>Orders</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>

                <ul class="sub-menu">
                    <div>
                    <li><a href="#"><span>Purchase Orders</span></a></li>
                    <li><a href="#"><span>Sales Orders</span></a></li>
                    <li><a href="#"><span>Order History</span></a></li>
                    </div>
                </ul>
            </ul>
            <ul class="userBorder">
                <button onclick="toggleSubMenu(this)" class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#fca311"><path d="M185-80q-17 0-29.5-12.5T143-122v-105q0-90 56-159t144-88q-40 28-62 70.5T259-312v190q0 11 3 22t10 20h-87Zm147 0q-17 0-29.5-12.5T290-122v-190q0-70 49.5-119T459-480h189q70 0 119 49t49 119v64q0 70-49 119T648-80H332Zm148-484q-66 0-112-46t-46-112q0-66 46-112t112-46q66 0 112 46t46 112q0 66-46 112t-112 46Z"/></svg>
                    <span>Users</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>

                <ul class="sub-menu">
                    <div>
                    <li><a href="#"><span>Manage Users</span></a></li>
                    <li><a href="#"><span>Add User</span></a></li>
                    </div>
                </ul>
            </ul>
            <div>
            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#fca311"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg><span>Settings</span></a></li>
            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 -960 960 960" width="24px" fill="#fca311"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg><span>Logout</span></a></li>
            </div>
        </ul>
    </nav>
</div>

<script src="index.js"></script>
</body>