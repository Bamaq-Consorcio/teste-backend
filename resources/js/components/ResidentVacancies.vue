<template>
  <div class="mrg-x-5 input-group mb-3">
    <select
      v-model="id"
      class="form-select"
      aria-label="Default select example"
    >
      <option
        v-for="residen in residents"
        :key="residen.id"
        :value="residen.id"
      >
        {{ residen.name }}
      </option>
    </select>
    <input @click="getResident()" class="btn btn-outline-primary" type="button" id="button-addon2" value="pesquisar"/>
  </div>
  <div class="o-box-info">
    <div class="info">
      <p><strong>Id do morador:</strong> {{ resident.id_resident }}</p>
      <p><strong>Nome do morador:</strong> {{ resident.resident_name }}</p>
      <p><strong>Email:</strong> {{ resident.email }}</p>
      <p><strong>Telefone: </strong> {{ resident.phone }}</p>
    </div>
    <div class="info">
      <p><strong>Apartamento:</strong> {{ resident.apartment_id }}</p>
      <p><strong>Número:</strong> {{ resident.number }}</p>
      <p><strong>Andar:</strong> {{ resident.floor }}</p>
      <p><strong>Bloco:</strong> {{ resident.edifice_id }}</p>
    </div>
    <div class="info">
      <p><strong>Veículo:</strong> {{ resident.id }}</p>
      <p><strong>Placa:</strong> {{ resident.license_plate }}</p>
      <p><strong>Cor:</strong> {{ resident.color }}</p>
      <p><strong>Tipo:</strong> {{ resident.type }}</p>
      <p><strong>Ano:</strong> {{ resident.year }}</p>
    </div>
  </div>
  <div class="o-box-vacancies">
    <div
      v-for="(vacancy, i) in residentVacancies"
      :key="vacancy.id"
      class="card text-dark bg-light col mrg-x-5"
    >
      <div class="card-header bg-primary centralized">Rodada 0{{ ++i }}</div>
      <div class="card-body centralized columns">
        <p>Vaga</p>
        <h5 style="color: #0d6efd">{{ vacancy.vacancy_id }}</h5>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  props: [
    "residentsdata",
  ],
  data() {
    return {
      id: 1,
      residentVacancies: [],
      resident: {},
      residents: [],
    };
  },
  computed: {
    residentId() {
      return this.id;
    },
  },
  async created() {
    this.residents = JSON.parse(this.residentsdata);
    console.log(JSON.parse(this.residentsdata));
    var response1 = await axios.get(
      `${window.location.origin}/api/list-rouds/${this.id}`
    );
    for (let prop in response1.data.resident.resident_vacancies) {
      this.residentVacancies.push(
        response1.data.resident.resident_vacancies[prop]
      );
    }
    this.resident = response1.data.resident.data;
    console.log(response1.data.resident.data);
    console.log("erro:", this.resident);
  },
  methods: {
    async getResident() {
      console.log('chegou');
      var response = await axios.get(
        `${window.location.origin}/api/list-rouds/${this.id}`
      );
      console.log(response.success);
      if (response.data.success) {
        this.resident = {};
        this.residentVacancies = [];
        for (let prop in response.data.resident.resident_vacancies) {
          this.residentVacancies.push(
            response.data.resident.resident_vacancies[prop]
          );
        }
        this.resident = response.data.resident.data;
        console.log("erro:", this.resident);
      }
    },
  },
};
</script>

<style scoped>
.centralized {
  display: flex;
  align-items: center;
  justify-content: center;
}
.o-box-vacancies {
  display: flex;
}
.o-box-info {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 10px;
  border: solid 1px gray;
  margin: 5px;
  margin-bottom: 10px;
}
.info {
  margin-right: 15px;
}
.mrg-x-5 {
  margin-inline: 5px;
}
.columns {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
</style>