<template>
    <div>
        <div>
            <!-- /product list -->
            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="/assets/img/icons/filter.svg" alt="img">
                                    <span><img src="/assets/img/icons/closes.svg" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="/assets/img/icons/search-white.svg" alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="/assets/img/icons/pdf.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="/assets/img/icons/excel.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="/assets/img/icons/printer.svg" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Filter -->
                    <div class="card mb-0" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Product</option>
                                                    <option>Macbook pro</option>
                                                    <option>Orange</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Category</option>
                                                    <option>Computers</option>
                                                    <option>Fruits</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Sub Category</option>
                                                    <option>Computer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Brand</option>
                                                    <option>N/D</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12 ">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Price</option>
                                                    <option>150.00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-sm-6 col-12">
                                            <div class="form-group">
                                                <a class="btn btn-filters ms-auto"><img
                                                        src="/assets/img/icons/search-whites.svg" alt="img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Filter -->
                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Product Name</th>
                                    <th>SKU</th>
                                    <th>Category </th>
                                    <th>Provider</th>
                                    <th>Type</th>
                                    <th>Qty</th>
                                    <th>Min Qty</th>
                                    <th>Selling Price</th>
                                    <th>Buying Price</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="pr in products" v-bind:value="pr.id">
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="/assets/img/product/product1.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">{{ pr.productName }}</a>
                                    </td>
                                    <td>{{ pr.sku }}</td>
                                    <td>{{ pr.categoryId }}</td>
                                    <td>{{ pr.providerId }}</td>
                                    <td>{{ pr.typeId }}</td>
                                    <td>{{ pr.quantity }}</td>
                                    <td>{{ pr.minQuantity }}</td>
                                    <td>{{ pr.sellingPrice }}</td>
                                    <td>{{ pr.buyingPrice }}</td>
                                    <td>{{ pr.createdBy }}</td>

                                    <td>
                                        <a class="me-3" href="{{url('product-details')}}">
                                            <img src="/assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <router-link class="me-3" :to="'/editProduct/' + pr.id">
                                            <img src="/assets/img/icons/edit.svg" alt="img">
                                        </router-link>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="/assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /product list -->
        </div>
    </div>
</template>
<script>
import { onMounted } from 'vue';
import axios from 'axios';

export default {
    data() {
        return {
            products: {},
        }
    },

    mounted() {
        axios.get('/api/product')
            .then(response => {
                this.products = response.data.data;
            })
        
    }
}
</script>