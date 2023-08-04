<template>
    <div>
        <div>
            <!--/add -->
            <form @submit.prevent="saveData()">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="productName" v-model="products.productName">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>SKU</label>
                                    <input type="text" name="sku" v-model="products.sku">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select  v-model="products.categoryId">
                                        <option v-for="cg in categories" v-bind:value="cg.id">{{ cg.name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" name="quantity" v-model="products.quantity">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Minimum Qty</label>
                                    <input type="text" name="minQuantity" v-model="products.minQuantity">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Provider</label>
                                    <select name="providerId" v-model="products.providerId">
                                        <option v-for="pr in providers" :key="pr.id" :value="pr.id">{{ pr.name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="typeId" v-model="products.typeId">
                                        <option v-for="tp in types" :key="tp.id" :value="tp.id">{{ tp.label }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tax</label>
                                    <select name="tax" v-model="products.tax">
                                        <option>Choose Tax</option>
                                        <option>7</option>
                                        <option>14</option>
                                        <option>20</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Selling Price</label>
                                    <input type="text" name="sellingPrice" v-model="products.sellingPrice">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Buying Price</label>
                                    <input type="text" name="buyingPrice" v-model="products.buyingPrice">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Status</label>
                                    <select name="statuses" v-model="products.status">
                                        <option v-for="st in statuses" :key="st.id" :value="st.id">{{ st.label }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"
                                        v-model="products.description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Product Image</label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="/assets/img/icons/upload.svg" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!--<a type="submit" class="btn btn-submit me-2">Submit</a>-->
                                <input type="submit" class="btn btn-submit me-2">
                                <a href="url:'productlist'" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--/add-->
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            products: {
                productName: '',
                sku: '',
                categoryId: '',
                typeId: '',
                providerId: '',
                status: '',
                tax: '',
                quantity: '',
                minQuantity: '',
                sellingPrice: '',
                buyingPrice: '',
                description: '',
                //'productImage': '',
                active: '1',
                createdBy: '1',

            },
            categories: {},
            providers: {},
            types: {},
            statuses: {},
        }
    },
    mounted() {
        axios.get('/api/category')
            .then(response => {
                this.categories = response.data.data;

            })
        axios.get('/api/provider')
            .then(response => {
                this.providers = response.data.data;
            })
        axios.get('/api/type')
            .then(response => {
                this.types = response.data.data;
            })
        axios.get('/api/status').then(response => {
            this.statuses = response.data.data
        })
    },
    methods: {
        saveData() {
            console.log(this.products);
            axios.post('/api/products/create', this.products).
                then((response) => {
                    // Clear the form and update the product list
                    console.log(response);
                    if (response.data) {
                        Swal.fire({
                            title: response.data.success,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: !1,
                        });

                        this.$router.push("/productList");
                    } else {
                        Swal.fire({
                            title: "Error server try later !!!!",
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: !1,
                        });
                    }
                }).catch((error) => {
                    console.log("error0", error);
                    if (error.response) {
                        Swal.fire({
                            title: "Error!",
                            text: error.response.data.message,
                            type: "error",
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: !1,
                        });
                        // The request was made and the server responded with a status code
                        console.log(error.response.data); // Error response data
                        console.log(error.response.status); // Error status code
                        console.log(error.response.statusText); // Error status text
                    } else if (error.request) {
                        // The request was made, but no response was received
                        console.log(error.request);
                    } else {
                        // Something happened in setting up the request that triggered an Error
                        console.log("Error", error.message);
                    }
                    console.log(error.config);
                });
        }
    },
};

</script>