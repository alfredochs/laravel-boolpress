<template>
    <div class="container-fluid bg-dark">
        <nav class="container navbar navbar-expand-sm navbar-dark">
            <router-link class="navbar-brand" to="/">Home</router-link>

            <div
                class="d-flex justify-content-between flex-grow-1 align-items-center"
            >
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'contacts' }"
                            >
                                Contatti
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'about' }"
                                >About</router-link
                            >
                        </li>
                        <li class="nav-item">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'all-posts' }"
                                >All Posts</router-link
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <a class="navbar-brand" href="/login">Dashboard</a>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Navbar",
};
</script>

<style></style>
// dropdown //
<li class="nav-item dropdown">
//                         <a
//                             class="nav-link dropdown-toggle"
//                             href="#"
//                             id="dropdownId"
//                             data-toggle="dropdown"
//                             aria-haspopup="true"
//                             aria-expanded="false"
//                             >Dropdown</a
//                         >
//                         <div class="dropdown-menu" aria-labelledby="dropdownId">
//                             <a class="dropdown-item" href="#">Action 1</a>
//                             <a class="dropdown-item" href="#">Action 2</a>
//                         </div>
//                     </li>
