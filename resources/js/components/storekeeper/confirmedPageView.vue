<template>
  <div class="p-3">
    <div class="row">
      <h4 class="card-title text-center">
        <b>ITEM DETAILS </b>
      </h4>
      <div class="card-body align-items-center">
        <div class="row">
          <div class="col-md-3">
            <h5>Date</h5>
            <p>{{ convert_date() }}</p>
          </div>
          <div class="col-md-3">
            <h5>Details of supplier</h5>
            <p>{{  }}</p>
          </div>

          <div class="col-md-3">
            <h5>Descripction of item</h5>
            <p>{{  }}</p>
          </div>

          <div class="col-md-3">
            <h5>Name of item</h5>
            <p>{{ }}</p>
          </div>
        </div>

        <hr />

        <div class="row">
          <div class="col-md-3">
            <h5>Quantity</h5>
            <p>{{  }}</p>
          </div>
          <div class="col-md-3">
            <h5>Price</h5>
            <p>{{ }}</p>
          </div>

          <div class="col-md-3">
            <h5>Invoice No</h5>
            <p>{{  }}</p>
          </div>

          <div class="col-md-3">
            <h5>Remarks</h5>

            <textarea
              class="form-control form-height"
              name="remarks"
              v-model="lot.remarks"
            ></textarea>
          </div>

          <hr />
        </div>
        <div class="row">
          <div class="col-md-3">
            <h5>GIR page no</h5>
            <input
              type="text"
              class="form-control"
              placeholder="GIR page no"
              name="girno"
            />
          </div>
          <div class="col-md-3">
            <h5>Select Category</h5>
            <select class="form-control" id="category_name" name="GIR_category">
              <option value="">Select category</option>
              <option value="kardex">Kardex</option>
              <option value="dsr">DSR</option>
            </select>
          </div>

          <div class="col-md-3">
            <h5>Category page no</h5>
            <input
              type="text"
              class="form-control"
              placeholder="Category page no"
              name="category_page_no"
            />
          </div>

          <div class="col-md-3">
            <h5>Purchase Order no</h5>
            <input
              type="text"
              class="form-control"
              placeholder="Purchase Order no"
              name="Purchase_no"
            />
          </div>

          <hr />
        </div>

        <div class="row">
          <div class="col-md-3">
            <h5>Purchase Order Date</h5>
            <input
              type="date"
              class="form-control"
              placeholder="Purchase Order date"
              name="Purchase_order_date"
            />
          </div>

          <hr />
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <div class="form-group text-end">
          <button
            class="btn btn-secondary btn-sm float-right"
            data-dismiss="modal"
            ref="cancel_btn"
            type="button"
          >
            Cancel
          </button>

          <button
            class="btn btn-success btn-sm float-right"
            type="submit"
            @click="addToGIR()"
          >
            Add TO GIR
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";
export default {
  created() {
    var da = this;
    bus.$on("confirmed-details", function (confirmed) {
   
    });
  },
  data() {
    return {
      lot: {
        product_id: "",
        product_date: "",
        product_supplier_id: "",
        section_id: "",
        item_id: "",
        quantity: "",
        price: "",
        invoice: "",
        Dc_no: "",
        Dc_date: "",
        arrivals_page_no: "",
        gir_page_no: "",
        category_book: "",
        category_book_page_no: "",
        purchase_order_no: "",
        purchase_order_date: "",
        remarks: "",
        supplier_details :'',
        item_name:'',

      },

      errors: {},
    };
  },

  methods: {
    convert_date(date) {
      return moment(date).format("DD-MM-YYYY");
    },

    addToGIR() {
      axios
        .post("./addtogir")
        .then((response) => {
          if (response.data == "Success") {
            Swal.fire("Confirmed!", "", "success");

            this.$refs.cancel_btn.click();
          }
        })
        .catch((error) => {
          this.errors = error.response.data.errors.remarks;
        });
    },
  },
};
</script>

<style>
</style>