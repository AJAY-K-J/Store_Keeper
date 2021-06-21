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
            <p>{{ convert_date(date) }}</p>
          </div>
          <div class="col-md-3">
            <h5>Details of supplier</h5>
            <p>{{Details_of_supplier}}</p>
          </div>
<div class="col-md-3">
            <h5>Name of item</h5>
            <p>{{Name_of_item}}</p>
          </div>
          <div class="col-md-3">
            <h5>Descripction of item</h5>
            <p>{{ Descripction_of_item}}</p>
          </div>

          
        </div>

        <hr />

        <div class="row">
          <div class="col-md-3">
            <h5>Price</h5>
            <p>{{ Price}}</p>
          </div>

          <div class="col-md-3">
            <h5>Invoice No</h5>
            <p>{{Invoice}}</p>
          </div>
          <div class="col-md-3">
            <h5>DC no</h5>
            <p>{{DC_no}}</p>
          </div>

          <div class="col-md-3">
            <h5>DC date</h5>
            <p>{{convert_date(DC_date) }}</p>
          </div>

          <hr />
        </div>
        <hr />

        <div class="row">
          <div class="col-md-3">
            <h5>Quantity</h5>
            <p>{{Quantity}}</p>
          </div>
            <div class="col-md-3">
            <h5>Approved Quantity</h5>

            <p>{{Approved_Quantity}}</p>
          </div>
          <div class="col-md-3">
            <h5>Rejected Quantity</h5>
            <p>{{Rejected_Quantity}}</p>
          </div>

        
          <div class="col-md-3">
            <h5>Remarks</h5>

            <p>{{Remarks}}</p>
          </div>

          <hr />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";
export default {
  created() {
    var np = this;
    bus.$on("arrivals-details", function (arrivals) {
      np.date = arrivals.date;
      np.Details_of_supplier = arrivals.supplier;
      np.Descripction_of_item = arrivals.description_item;
      np.Name_of_item = arrivals.item_name;
      np.Price = arrivals.price;
      np.Invoice = arrivals.invoice;
      np.DC_no = arrivals.Dc_no;
      np.DC_date = arrivals.Dc_date;
      np.Quantity = arrivals.quantity;
      np.Rejected_Quantity = arrivals.rejectedquantity;
      np.Approved_Quantity = arrivals.approvedquantity;
      np.Remarks = arrivals.remarks;
    });
  },
  data() {
    return {
      date: "",
      Details_of_supplier: "",
      Descripction_of_item: "",
      Name_of_item: "",
      Price: "",
      Invoice: "",
      DC_no: "",
      DC_date: "",
      Quantity: "",
      Rejected_Quantity: "",
      Approved_Quantity: "",
      Remarks: "",
    };
  },

  methods: {
    convert_date(date) {
      return moment(date).format("DD-MM-YYYY");
    },
  },
};
</script>

<style>
</style>