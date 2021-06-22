<template>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">Rejected Items</h5>
        </div>
        <div class="col-md-6 text-end"></div>
      </div>


    <table class="table text-center table-hover table-danger">
      <thead>
        <tr>
          <th scope="col">#</th>

          <th scope="col">Date</th>
          <th scope="col">Item</th>
          <th scope="col">Description of item</th>
          <th scope="col">Quantity</th>
          <th scope="col">Rejected Quantity</th>
          <th scope="col">Invoice No</th>
          <th scope="col">Remarks</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="rejected in rejected_details.data" :key="rejected.id">
          <td>{{ rejected.id }}</td>

          <td>{{ convert_date(rejected.date) }}</td>

          <td>{{ rejected.item_name }}</td>

          <td>{{ rejected.description_item }}</td>

          <td>{{ rejected.quantity }}</td>
          <td>{{ rejected.rejectedquantity }}</td>

          <td>{{ rejected.invoice }}</td>

          <td>{{ rejected.remarks }}</td>

          <td>
            <button
              type="button"
              class="btn btn-sm btn-secondary"
              data-toggle="modal"
              data-target=".rejectedPageview"
              @click="view_rejected(rejected)"
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
        :data="rejected_details"
        @pagination-change-page="get_rejected_details"
      ></pagination>
    </div>



    <!-- Modal -->

    <div
      class="modal fade rejectedPageview"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <rejectedPage-view> </rejectedPage-view>
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
      rejected_details: {},
    };
  },

  created() {
    this.get_rejected_details();
    var aj = this;
 

    bus.$on("disposed   ``````++", function () {
      aj.get_rejected_details();
    });
  },

  methods: {
    convert_date(date) {
      return moment(date).format("DD-MM-YYYY");
    },
    view_rejected(rejected) {
      bus.$emit("rejected-details", rejected);
    },

    get_rejected_details(page =1) {
      axios
        .get("/rejectedDetails?page=" + page)
        .then((response) => (this.rejected_details = response.data));
    },
  },
};
</script>

<style>
</style>