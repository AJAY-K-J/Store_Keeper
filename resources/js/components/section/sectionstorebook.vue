<template>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">Section Stocks</h5>
        </div>
        <div class="col-md-6 text-end"></div>
      </div>
    </div>
 
    <table class="table text-center">
      <thead>
        <tr>
     
          <th scope="col">Item</th>
          <th scope="col">Description of item</th>
          <th scope="col">Quantity in Section</th>

       
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="stocks in section_stocks" :key="stocks.id">
        

     

          <td>{{ stocks.item_name }}</td>

          <td>{{ stocks.description_item }}</td>

          <td>{{ stocks.quantity_stock }}</td>



  

          <td>
            <button
             type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#viewstocks"
            @click=" view_section_stocks(stocks)"
            >
              view
            </button>

          </td>
        </tr>
      </tbody>
    </table>

    <!-- Modal -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="viewstocks" tabindex="-1" role="dialog" aria-labelledby="viewstocksTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
       
      </div>
      <div class="modal-body">
         <view-section-stock> </view-section-stock>
      </div>
   
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
      section_stocks: [],
    };
  },

  created() {


 this. get_section_stocks();
 var aj = this;

bus.$on("item-deprecated", function () {
     aj.get_section_stocks();
    });

  },

  methods: {
    convert_date(date) {
      return moment(date).format("DD-MM-YYYY");
    },
   view_section_stocks(stocks) {
      bus.$emit("section-stock", stocks);
    },

    get_section_stocks() {
      axios
        .get("/sectionstockdetails")
        .then((response) => (this.section_stocks = response.data));
    },
  },
};
</script>

<style>
</style>