<template>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">pending Confirmation</h5>
        </div>
        <div class="col-md-6 text-end"></div>
      </div>
    </div>
 
    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">#</th>

          <th scope="col">Date</th>
          <th scope="col">Item</th>
          <th scope="col">Description of item</th>
          <th scope="col">Quantity</th>
          <th scope="col">Invoice No</th>
          <th scope="col">Remarks</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="details in section_details" :key="details.id">
          <td>{{ details.id }}</td>

          <td>{{ convert_date(details.date) }}</td>

          <td>{{ details.item_name }}</td>

          <td>{{ details.description_item }}</td>

          <td>{{ details.quantity }}</td>

          <td>{{ details.invoice }}</td>

          <td>{{ details.remarks }}</td>

          <td>
            <button
              type="button"
              class="btn btn-sm btn-secondary"
              data-toggle="modal"
              data-target=".view"
              @click="view_arrival(details)"
            >
              view
            </button>

            <button class="btn btn-success btn-sm m-0">Confirm</button>
            <button class="btn btn-danger btn-sm m-0">Reject</button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Modal -->

    <div
      class="modal fade view"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <view-arrival> </view-arrival>
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
      section_details: [],
    };
  },

  created() {


 this. get_section_details();
 var aj = this;

bus.$on("item-confirmed ", function () {
     aj.get_section_details();
    });

  },

  methods: {
    convert_date(date) {
      return moment(date).format("DD-MM-YYYY");
    },
    view_arrival(details) {
      bus.$emit("store-details", details);
    },

    get_section_details() {
      axios
        .get("/section-details")
        .then((response) => (this.section_details = response.data));
    },
  },
};
</script>

<style>
</style>