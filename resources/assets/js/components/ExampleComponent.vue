<template>
  <div>
    <v-card class="card mx-auto" max-width="344" outlined>
      <v-list-item three-line>
        <v-list-item-content>
          <div class="overline mb-4">Prueba</div>
          <v-list-item-title class="headline mb-1">Componente</v-list-item-title>
          <v-list-item-subtitle>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</v-list-item-subtitle>
        </v-list-item-content>

        <v-list-item-avatar tile size="80"><img src="./../../img/test-img.jpg" /></v-list-item-avatar>
      </v-list-item>

      <v-card-actions>
        <v-btn color="primary" dark @click.stop="dialog = true">Abrir</v-btn>

        <v-dialog v-model="dialog" max-width="290">
          <v-card>
            <v-card-title class="headline">Titulo de diálogo</v-card-title>

            <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>

              <v-btn color="green darken-1" text @click="dialog = false">Desacuerdo</v-btn>

              <v-btn color="green darken-1" text @click="dialog = false">De acuerdo</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-card-actions>
    </v-card>
  </div>
</template>

<script>
export default {
  data() {
    return {
      body: "Componente de ejemplo",
      dialog: false,
    };
  },
};
</script>

<style scoped>

img {
  border: 1px solid rgb(0, 0, 0);
  background-color: rgb(55, 177, 85);
  border-radius: 4px;
  padding: 3px;
  width: 150px;
}
</style>
