
<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative mt-4">
            <div class="d-flex justify-content-between align-items-center rounded">
                <img src="./assets/compiled/png/logo.png" alt="Logo" width="50"><br>
                <span class="text-uppercase fw-bold px-2 py-0" style="font-size: 14px">Elisya's Hair And Spa Salon</span>
            </div>
        </div>
        <div class="theme-toggle d-flex gap-2  align-items-center mb-4 float-end px-4">
            <i class="fas fa-sun"></i>
            <div class="form-check form-switch fs-6">
                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                <label class="form-check-label"></label>
            </div>
            <i class="fas fa-moon"></i>
        </div>
        <div class="sidebar-menu mx-0">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item active">
                    <a href="/superadmin" class="sidebar-link">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-database"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="submenu px-0"> 
                        <li class="submenu-item">
                            <a href="/type" class="submenu-link">
                                <i class="fas fa-box"></i> Types
                            </a>
                        </li> 
                        <li class="submenu-item">
                            <a href="/service" class="submenu-link">
                                <i class="fas fa-cut"></i> Services
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="/product" class="submenu-link">
                                <i class="fas fa-shopping-basket"></i> Products
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="/member" class="submenu-link">
                                <i class="fas fa-users"></i> Members
                            </a>
                        </li> 
                        <li class="submenu-item">
                            <a href="/employee" class="submenu-link">
                                <i class="fas fa-user-tie"></i> Employees
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="/reservationAdmin" class="sidebar-link">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Reservation</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/transaction" class="sidebar-link">
                        <i class="fas fa-wallet"></i>
                        <span>Transaction</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/reservationPDF" class="sidebar-link">
                    <i class="fa-solid fa-print"></i>
                        <span>Print Reservation</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/transactionPDF" class="sidebar-link">
                    <i class="fa-solid fa-print"></i>
                        <span>Print Transaction</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/logout" class="sidebar-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
