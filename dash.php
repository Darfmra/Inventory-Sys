<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="dashCon.css">
    <title>Dashboard - Inventory Management System</title>
</head>
<body>
    
<?php include 'sidebar.php'; ?>

<div class="mainContent">

        <div class="header">
            <h1 class="dash-header">Dashboard</h1>
        </div>

        <div class="stats-container">
            <div class="stat-card">
                <span class="stat-number">20</span>
                <span class="stat-label">Total Products</span>
            </div>

            <div class="stat-graph"></div>

            <div class="stat-card">
                <span class="stat-number">15</span>
                <span class="stat-label">Low Stock</span>
            </div>
            
            <div class="stat-graph"></div>

            <div class="stat-card">
                <span class="stat-number">12</span>
                <span class="stat-label">Total Orders</span>
            </div>

            <div class="stat-graph"></div>

            <div class="stat-card">
                <span class="stat-number">15</span>
                <span class="stat-label">Out of Stock</span>
            </div>
        </div>

    <div class="panel-row">
        <div class="stock-card">
            <h3>Stock Levels</h3>

        <div class="stock-row">
            <div class="stock-info">
                <span>Hawas Ice</span>
                <span>75 of 110</span>
            </div>
            <div class="track">
                <div class="fill" style="width: 68%"></div>
            </div>
        </div>

        <div class="stock-row">
            <div class="stock-info">
                <span>Obsidian Rayhaan</span>
                <span>64 of 110</span>
            </div>
            <div class="track">
                <div class="fill" style="width: 58.2%"> </div>
            </div>
        </div>

        <div class="stock-row">
            <div class="stock-info">
                <span>Valentino Uomo Intense</span>
                <span>42 of 110</span>
            </div>
            <div class="track">
                <div class="fill" style="width: 38.2%"></div>
            </div>
        </div>

        <div class="stock-row">
            <div class="stock-info">
                <span>Aventus Creed</span>
                <span>35 of 110</span>
            </div>
            <div class="track">
                <div class="fill" style="width: 32%"></div>
                </div>
            </div>
        </div>
    
        <div class="low-stock-card">
            <div class="alert-heading">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewbox="0 -960 960 960" width="40px" fill="#920f0f"><path d="m40-120 440-760 440 760H40Zm138-80h604L480-720 178-200Zm330.5-51.5Q520-263 520-280t-11.5-28.5Q497-320 480-320t-28.5 11.5Q440-297 440-280t11.5 28.5Q463-240 480-240t28.5-11.5ZM440-360h80v-200h-80v200Zm40-100Z"/></svg>
                <h3>Low stock alerts</h3>
            </div>
            <div class="low-stock-info">
                <span>Le Male Elixir Jean Paul Gaultier</span>
                <span class="low-amount">3 left</span>
            </div>
            <div class="low-stock-info">
                <span>Eros Versace</span>
                <span class="low-amount">6 left</span>
            </div>
            <div class="low-stock-info">
                <span>Cool Elixir Davidoff</span>
                <span class="low-amount">7 left</span>
            </div>
            <div class="low-stock-info">
                <span>Pacific Aura Rayhaan</span>
                <span class="low-amount">9 left</span>
            </div>
            </div>
        </div>

            <div class="panel-row">
            <div class="orders-card">
                <h3>Recent Orders</h3>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Type</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <td>Hawas Ice</td>
                        <td>Perfume</td>
                        <td>9/24/2026</td>
                    </tr>
                    <tr>
                        <td>Obsidian Rayhaan</td>
                        <td>Perfume</td>
                        <td>9/18/2026</td>
                    </tr>
                    <tr>
                        <td>Valentino Uomo Intense</td>
                        <td>Perfume</td>
                        <td>8/29/2026</td>
                    </tr>
                    <tr>
                        <td>Aventus Creed</td>
                        <td>Perfume</td>
                        <td>8/12/2026</td>
                    </tr>
                </table>
            </div>


            <div class="recent-container">
                <h3>Recent activity</h3>
                <div class="recent-infos">
                    <span>Product added</span>
                    <span class="time-added">4:44pm</span>
                </div>
                <div class="recent-infos">
                    <span>Order updated</span>
                    <span class="time-added">6:23am</span>
                </div>
            </div>
            </div>








</div>
<script src="index.js" defer></script>
</body>
</html>