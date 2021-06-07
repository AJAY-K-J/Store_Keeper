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
            <p>{{ date }}</p>
          </div>
          <div class="col-md-3">
            <h5>Details of supplier</h5>
            <p>{{ supplier }}</p>
          </div>

          <div class="col-md-3">
            <h5>Descripction of item</h5>
            <p>{{ descripction_item }}</p>
          </div>

          <div class="col-md-3">
            <h5>Name of item</h5>
            <p>{{ item_name }}</p>
          </div>
        </div>

        <hr />

        <div class="row">
          <div class="col-md-3">
            <h5>Quantity</h5>
            <p>{{ quantity }}</p>
          </div>
          <div class="col-md-3">
            <h5>Price</h5>
            <p>{{ price }}</p>
          </div>

          <div class="col-md-3">
            <h5>Invoice No</h5>
            <p>{{ invoice }}</p>
          </div>

          <div class="col-md-3">
            <h5>Remarks</h5>

            <textarea
              class="form-control form-height"
              name="remarks"
              v-model="remarks"
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
           <select
              class="form-control"
              id="category_name"
              name="GIR_category"
            
            >
              <option value="">Select category</option>
              <option >
              
              </option>
            </select>
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
export default {
  created() {
    var da= this;
    bus.$on("confirmed-details", function (confirmed) {
      da.date = confirmed.date;
      da.remarks = confirmed.remarks;
     da.supplier = confirmed.supplier;
     da.descripction_item = confirmed.description_of_item;
      da.item_name = confirmed.item_name;
      da.quantity = confirmed.quantity;
     da.price = confirmed.price;
      da.invoice = confirmed.invoice;
     da.id = confirmed.id;
    });
  },
  data() {
    return {
      id: "",
      date: "",
      supplier: "",
      descripction_item: "",
      item_name: "",
      quantity: "",
      price: "",
      invoice: "",

      remarks: "",

      errors: {},
    };
  },

  methods: {
    addToGIR() {
      axios
        .post("./addGoods/" + this.id, {
          remarks: this.remarks,
        })
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