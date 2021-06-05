<template>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <form
          class="form-horizontal"
          method="POST"
          @submit.prevent="addarrivals()"
        >
          <div class="card-body">
            <h4 class="card-title text-center">
              <b>STORE ARRIVAL REGISTER </b>
            </h4>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date" class="control-label col-form-label"
                    >Date
                  </label>
                  <div class="col-sm-9">
                    <input
                      type="date"
                      class="form-control"
                      id="date"
                      name="date"
                      v-model="arrivals.date"
                      placeholder="Date "
                    />
                  </div>

                  <small class="text-danger" v-if="errors.date">{{
                    errors.date[0]
                  }}</small>
                </div>

                <div class="form-group">
                  <label for="quantity" class="control-label col-form-label"
                    >Quantity</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="text"
                      class="form-control"
                      id="quantity"
                      name="quantity"
                      v-model="arrivals.quantity"
                      placeholder="Quantity Here"
                    />
                  </div>
                  <small class="text-danger" v-if="errors.quantity">{{
                    errors.quantity[0]
                  }}</small>
                </div>
                <div class="form-group">
                  <label for="dcdate" class="control-label col-form-label">
                    DC Date</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="date"
                      class="form-control"
                      id="dcdate"
                      name="Dc_date"
                      v-model="arrivals.Dc_date"
                      placeholder=" DC Date "
                    />
                  </div>

                  <small class="text-danger" v-if="errors.Dc_date">{{
                    errors.Dc_date[0]
                  }}</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="supplier" class="control-label col-form-label"
                    >Details of supplier</label
                  >
                  <div class="col-sm-9">
                    <textarea
                      class="form-control form-height"
                      id="supplier"
                      v-model="arrivals.supplier"
                      name="supplier"
                    ></textarea>
                  </div>
                  <small class="text-danger" v-if="errors.supplier">{{
                    errors.supplier[0]
                  }}</small>
                </div>

                <div class="form-group">
                  <label for="price" class="control-label col-form-label"
                    >Price</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="text"
                      class="form-control"
                      id="price"
                      name="price"
                      v-model="arrivals.price"
                      placeholder="Price Here"
                    />
                  </div>

                  <small class="text-danger" v-if="errors.price">{{
                    errors.price[0]
                  }}</small>
                </div>
                <div class="form-group">
                  <label for="section" class="control-label col-form-label"
                    >Name of Section
                  </label>
                  <div class="col-sm-9">
                    <select
                      class="form-control"
                      id="section"
                      name="section"
                      v-model="arrivals.section"
                    >
                      <option value="">Select section</option>
                      <option
                        v-for="section in section_details"
                        :key="section.id"
                      >
                        {{ section.name }}
                      </option>
                    </select>
                  </div>

                  <small class="text-danger" v-if="errors.section">{{
                    errors.section[0]
                  }}</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="item" class="control-label col-form-label"
                    >Description of item</label
                  >
                  <div class="col-sm-9">
                    <textarea
                      class="form-control form-height"
                      name="description_of_item"
                      v-model="arrivals.description_of_item"
                    ></textarea>
                  </div>
                  <small
                    class="text-danger"
                    v-if="errors.description_of_item"
                    >{{ errors.description_of_item[0] }}</small
                  >
                </div>

                <div class="form-group">
                  <label for="invoice" class="control-label col-form-label"
                    >Invoice No</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="text"
                      class="form-control"
                      id="invoice"
                      name="invoice"
                      v-model="arrivals.invoice"
                      placeholder="Invoice No Here"
                    />
                  </div>

                  <small class="text-danger" v-if="errors.invoice">{{
                    errors.invoice[0]
                  }}</small>
                </div>

                <div class="form-group">
                  <label for="officer" class="control-label col-form-label"
                    >Name of officer
                  </label>
                  <div class="col-sm-9">
                    <select
                      class="form-control"
                      id="store_officer"
                      name="store_officer"
                      v-model="arrivals.section_officer"
                    >
                      <option value="">Select Name</option>
                      <option
                        v-for="officer in section_officer"
                        :key="officer.id"
                      >
                        {{ officer.name }}
                      </option>
                    </select>
                  </div>
                  <small class="text-danger" v-if="errors.section_officer">{{
                    errors.section_officer[0]
                  }}</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="itemname" class="control-label col-form-label"
                    >Choose item
                  </label>
                  <div class="col-sm-9">
                    <select
                      class="form-control"
                      id="itemname"
                      name="item_name"
                      v-model="arrivals.item_name"
                    >
                      <option value="">Select item</option>
                      <option v-for="item in item_details" :key="item.id">
                        {{ item.name }}
                      </option>
                    </select>
                  </div>

                  <small class="text-danger" v-if="errors.item_name">{{
                    errors.item_name[0]
                  }}</small>
                </div>

                <div class="form-group">
                  <label for="dcno" class="control-label col-form-label"
                    >DC No</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="text"
                      class="form-control"
                      id="dcno"
                      name="Dc_no"
                      v-model="arrivals.Dc_no"
                      placeholder="DC No Here"
                    />
                  </div>

                  <small class="text-danger" v-if="errors.Dc_no">{{
                    errors.Dc_no[0]
                  }}</small>
                </div>

                <div class="form-group">
                  <label for="remarks" class="control-label col-form-label"
                    >Remarks</label
                  >
                  <div class="col-sm-9">
                    <textarea
                      class="form-control form-height"
                      name="remarks"
                      v-model="arrivals.remarks"
                    ></textarea>
                  </div>

                  <small class="text-danger" v-if="errors.remarks">{{
                    errors.remarks[0]
                  }}</small>
                </div>
              </div>

              <div class="border-top">
                <div class="card-body text-end">
                  <button
                    type="submit"
                    class="btn btn-primary"
                    name="arrivalsave"
                  >
                    Register
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";
export default {
  props: ["edit", "item_details", "section_details", "section_officer"],

  created() {},

  data() {
    return {
      arrivals: {
        date: "",
        supplier: "",
        description_of_item: "",
        item_name: "",
        quantity: "",
        price: "",
        invoice: "",
        Dc_no: "",
        Dc_date: "",
        section: "",
        section_officer: "",
        remarks: "",
      },
      errors: {},
    };
  },

  methods: {
    clear_data() {
      for (let arrival in this.arrivals) {
        this.arrivals[arrival] = null;
      }

      for (let er in this.errors) {
        this.errors[er] = null;
      }
    },

    addarrivals() {
      axios
        .post("./api/addarrivals", this.arrivals)
        .then((response) => {
          console.log(response);
          if (response.data == "Success") {
            this.clear_data();
          }

          bus.$emit("arrivals-added");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>

<style scoped>
</style>