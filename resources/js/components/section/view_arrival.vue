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
            <p>{{ supplier_details }}</p>
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
            @click="confirm()"
          >
            confirm
          </button>

          <button
            class="btn btn-danger btn-sm float-right"
            type="submit"
            @click="reject()"
          >
            Reject
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  created() {
    var vm = this;
    bus.$on("store-details", function (details) {
      vm.date = details.date;
      vm.remarks = details.remarks;
      vm.supplier_details = details.Details;
      vm.descripction_item = details.description_item;
      vm.item_name = details.item_name;
      vm.quantity = details.quantity;
      vm.price = details.price;
      vm.invoice = details.invoice;
      vm.id = details.id;
    });
  },
  data() {
    return {
      id: "",
      date: "",
      supplier_details: "",
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
    confirm() {
      axios
        .post("./section-confirm/" + this.id, {
          remarks: this.remarks,
        })
        .then((response) => {
          
          if (response.data == "Success") {
            Swal.fire("Confirmed!", "", "success");

            this.$refs.cancel_btn.click();
          }

          bus.$emit("item-confirmed ");
        })
        .catch((error) => {
          this.errors = error.response.data.errors.remarks;
        });
    },
    reject() {

Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, reject it!'
}).then((result) => {
  if (result.isConfirmed) {
    axios.post("./section-reject/" + this.id, {
          remarks: this.remarks,
        }).then((response) => {
          
          if (response.data == "Success") {
               Swal.fire(
      'Rejected!',
      'Your item has been rejected.',
      'success'
    );

            this.$refs.cancel_btn.click();
          }

          bus.$emit("item-confirmed ");
        });






 
  }
})





  
    },
  },
};
</script>

<style>
</style>