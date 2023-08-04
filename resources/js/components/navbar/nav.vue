<template>
    <div id="sidebar" class="sidebar">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 300px">
            <div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: 300px">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="submenu-open">
                            <h6 class="submenu-hdr">Main</h6>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><img src="/assets/img/icons/users1.svg" alt="img" /><span>
                                            User s</span>
                                        <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <router-link exact-active-class="active" to="/addproduct" class=" ">add
                                                new</router-link>
                                        </li>
                                        <li>
                                            <router-link exact-active-class="active" to="/productList"
                                                class="  ">List</router-link>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0);"><img src="/assets/img/icons/users1.svg" alt="img" /><span>
                                            Products</span>
                                        <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <router-link exact-active-class="active" to="/addproduct" class=" ">
                                                Add Product</router-link>
                                        </li>
                                        <li>
                                            <router-link exact-active-class="active" to="/productList"
                                                class="  ">Products List</router-link>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <div class="content container">
            <router-view></router-view>
        </div>
    </div>
</template>
  
<script>
export default {};
</script>