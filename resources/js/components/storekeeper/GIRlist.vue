<template>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">GIR Book</h5>
        </div>
        <div class="col-md-6 text-end"></div>
      </div>
   

    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">GIR Page</th>

          <th scope="col">Supplier Name</th>
          <th scope="col">Item</th>
          <th scope="col">Invoice No</th>
          <th scope="col">Purchase Order</th>
          <th scope="col">Category</th>
          <th scope="col">Quantity in Store</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="goods in goods_details.data" :key="goods.id">
          <td>{{ goods.gir_page_no }}</td>

          <td>{{ goods.supplier_name }}</td>

          <td>{{ goods.item_name }}</td>

          <td>{{ goods.invoice }}</td>

          <td>{{ goods.purchase_order_no }}</td>

          <td>{{ goods.category_book }}</td>

          <td>{{ goods.balance_quantity }}</td>

          <td>
            <button
              type="button"
              class="btn btn-sm btn-secondary"
              data-toggle="modal"
              data-target=".goodsview"
              @click="view_goods(goods)"
            >
              view
            </button>
            <button
              type="button"
              class="btn btn-sm btn-success"
              data-toggle="modal"
              data-target="#allotview"
              @click="allot_goods(goods)"
            >
              Allot
            </button>
          </td>
        </tr>
      </tbody>
    </table>
     </div>



        <div class="card-footer">
      <pagination
        :data="goods_details"
        @pagination-change-page="get_goods_list"
      ></pagination>
    </div>

    <!-- Modal -->

    <div
      class="modal fade goodsview"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <gir-view> </gir-view>
        </div>
      </div>
    </div>

    <!-- ########################################################################################################### -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="allotview"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="allotview">Allot goods</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
          </div>
          <div class="modal-body">
            <section-allot> </section-allot>
          </div>
        </div>
      </div>
    </div>

    <!-- ############################################################################################ -->
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      errors: {},
      goods_details: {},
    };
  },

  created() {
    this.get_goods_list();

    var cm = this;
    bus.$on("item-alloted", function () {
      cm.get_goods_list();
    });
  },

  methods: {
    convert_date(date) {
      return moment(date).format("DD-MM-YYYY");
    },
    view_goods(goods) {
      bus.$emit("GIR-Book", goods);
    },

    allot_goods(goods) {
      bus.$emit("allot-goods", goods);
    },

    get_goods_list(page = 1) {
      axios
        .get("/goodslist?page=" + page)
        .then((response) => (this.goods_details = response.data));
    },
  },
};
</script>

<style>
</style>