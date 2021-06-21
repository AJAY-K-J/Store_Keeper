<template>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">Arrival Register Details</h5>
        </div>
        <div class="col-md-6 text-end"></div>
      </div>


    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">#</th>

          <th scope="col">Date</th>
          <th scope="col">Item</th>
          <th scope="col">Description of item</th>
          <th scope="col">Quantity</th>
          <th scope="col">Approved Quantity</th>
          <th scope="col">Invoice No</th>
          <th scope="col">Remarks</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="arrivals in arrival_details.data" :key="arrivals.id">
          <td>{{ arrivals.id }}</td>

          <td>{{ convert_date(arrivals.date) }}</td>

          <td>{{ arrivals.item_name }}</td>

          <td>{{ arrivals.description_item }}</td>

          <td>{{ arrivals.quantity }}</td>
          <td>{{ arrivals.approvedquantity }}</td>

          <td>{{ arrivals.invoice }}</td>

          <td>{{ arrivals.remarks }}</td>

          <td>
            <button
              type="button"
              class="btn btn-sm btn-secondary"
              data-toggle="modal"
              data-target=".arrivalsPageview"
              @click="view_store_arrivals(arrivals)"
            >
              view
            </button>
          </td>
        </tr>
      </tbody>
    </table>
    </div>
  <div class="card-footer">
      <pagination
        :data="arrival_details"
        
        @pagination-change-page="
    get_Arrival_details"
      ></pagination>
    </div>



    <!-- Modal -->

    <div
      class="modal fade arrivalsPageview"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <arrival-details-view> </arrival-details-view>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      arrival_details: {},
    };
  },

  created() {
    this. get_Arrival_details();

   

  },

  methods: {
    convert_date(date) {
      return moment(date).format("DD-MM-YYYY");
    },
  view_store_arrivals(arrivals) {
      bus.$emit("arrivals-details", arrivals);
    },

    get_Arrival_details(page =1) {
      axios
        .get("/arrivalDetails?page=" + page)
        .then((response) => (this.arrival_details = response.data));
    },
  },
};
</script>

<style>
</style>