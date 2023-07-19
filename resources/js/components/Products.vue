<template>
    <div class="page-wrapper">
        <div class="content">
            <!-- /add -->
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
                                    <select class="select" name="categoryId">
                                        <option v-for="cg in categories" :key="cg.id" :value="cg.id">{{ cg.name }}</option>
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
                                    <input type="text" name="minQuantity" v-model="products.minQunatity">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Provider</label>
                                    <select class="select" name="providerId">
                                        <option v-for="pr in providers" :key="pr.id" :value="pr.id">{{ pr.name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="select" name="typeId" v-model="products.type">
                                        <option value=""></option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tax</label>
                                    <select class="select" name="tax" v-model="products.tax">
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
                                    <select class="select" name="statuses" v-model="products.status">
                                        <option value=""></option>
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
                                <a href="{{url('productlist')}}" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /add -->
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            products: {
                'productName': '',
                'sku': '',
                'category': '',
                'type': '',
                'provider': '',
                'status': '',
                'tax': '',
                'quantity': '',
                'minQunatity': '',
                'sellingPrice': '',
                'buyingPrice': '',
                'description': '',
                'productImage': '',
                'active': '',
                'createdBy': '',

            },
            categories: {},
            providers: {},
            types: {},
            statuses: {},
        }
    },
    mounted() {
        axios.get('/category')
            .then(response => {
                this.categories = response.data.data;
                
            })
        axios.get('/provider')
            .then(response => {
                this.providers = response.data.data;
            })
    },
    methods: {
        saveData() {
            axios.post('/products/create', this.products).then(
                response => {
                    console.log(response);
                }
            ).catch(error => {
                console.log('Error here');
            })
        }
    }
};
</script>