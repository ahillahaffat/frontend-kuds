<template>
    <b-form @submit.prevent>
      <b-card>
      <b-row>
        <b-col md="4">
          <h4>Nama Produk</h4>
          <p>Pilihlah nama yang singkat, jelas, dan mudah diingat oleh pelanggan potensial. Hindari penggunaan kata-kata yang rumit atau sulit dieja. Nama yang pendek dan sederhana akan lebih mudah dikenali dan diingat.</p>
        </b-col>
        <b-col md="8">
            <b-form-input
              id="v-nama-produk"
              v-model="data.nama_produk"
              placeholder="Beras, Minyak, dll"
            />
        </b-col>
        <b-col cols="12">
            <b-form-group
            label="Merek"
            label-for="v-nama-merek"
          >
            <b-form-input
              id="v-nama-merek"
              v-model="data.merek"
              placeholder="Raja Lele, Minyak Kita, dll"
            />
          </b-form-group>
        </b-col>
        <b-col cols="12">
            <b-form-group
            label="Kondisi"
            label-for="v-kondisi"
          >
        <b-form-select
          v-model="data.kondisi"
          :options="kondisi_menu"
        />
          </b-form-group>
        </b-col>
        <b-col cols="12">
            <b-form-group
            label="Deskripsi Produk"
            label-for="v-deskripsi-produk"
          >
            <b-form-textarea
              id="v-deskripsi-produk"
              v-model="data.deskripsi_produk"
              placeholder="Deskripsikan Produk Anda"
            />
          </b-form-group>
        </b-col>
        <b-col cols="12">
            <b-form-group
            label="Foto Produk 1"
            label-for="v-foto-produk1"
          >
            <b-form-file
              id="v-foto-produk1"
              accept="image/*"
            />
          </b-form-group>
        </b-col>
        <b-col cols="12">
            <b-form-group
            label="Foto Produk 2"
            label-for="v-foto-produk2"
          >
            <b-form-file
              id="v-foto-produk2"
              accept="image/*"
            />
          </b-form-group>
        </b-col>
        <b-col cols="12">
            <b-form-group
            label="Foto Produk 3"
            label-for="v-foto-produk3"
          >
            <b-form-file
              id="v-foto-produk3"
              accept="image/*"
            />
          </b-form-group>
        </b-col>
      </b-row>
      </b-card>
      <b-card>
      <b-row>
        <b-col cols="12">
              <b-form-group
              label="Kondisi"
              label-for="v-kondisi"
            >
          <b-form-select
            v-model="data.kondisi"
            :options="kondisi_menu"
          />
            </b-form-group>
          </b-col>
      </b-row>
      </b-card>
    </b-form>
</template>

<script>
import {
  BCard, BRow, BCol, BFormGroup, BFormInput, BForm, BFormSelect, BFormTextarea, BFormFile,
} from 'bootstrap-vue'
import Ripple from 'vue-ripple-directive'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'
// eslint-disable-next-line
import 'quill/dist/quill.core.css'
// eslint-disable-next-line
import 'quill/dist/quill.snow.css'
// eslint-disable-next-line
import 'quill/dist/quill.bubble.css'

export default {
  components: {
    BCard,
    BRow,
    BCol,
    BFormGroup,
    BFormInput,
    BForm,
    BFormFile,
    BFormSelect,
    BFormTextarea,
  },
  directives: {
    Ripple,
  },

  data() {
    return {
      kondisi_menu: [
        { value: 'baru', text: 'Baru' },
        { value: 'bekas', text: 'Bekas' },
      ],
      status_varian_menu: [
        { value: '1', text: 'Anda Menggunakan' },
        { value: '0', text: 'Status Varian' },
      ],
      selected: '',
      data: {
        nama_produk: '',
        merek: '',
        kondisi: '',
        deskripsi_produk: '',
        foto_produk1: '',
        foto_produk2: '',
        foto_produk3: '',
      },
    }
  },
  mounted() {
    this.getData()
  },
  methods: {
    saveData() {
      const data = new FormData()
      data.append('id_ujian', this.$route.params.id_ujian)
      data.append('soal', this.data.soal)
      data.append('file_soal', this.data.file_soal)
      data.append('pil_a', this.data.pil_a)
      data.append('pil_b', this.data.pil_b)
      data.append('pil_c', this.data.pil_c)
      data.append('pil_d', this.data.pil_d)
      data.append('pil_e', this.data.pil_e)
      data.append('file_a', this.data.file_a)
      data.append('file_b', this.data.file_b)
      data.append('file_c', this.data.file_c)
      data.append('file_d', this.data.file_d)
      data.append('file_e', this.data.file_e)
      data.append('jawaban', this.data.jawaban)
      data.append('nilai', this.data.nilai)
      data.append('pembahasan', this.data.pembahasan)
      data.append('file_pembahasan', this.data.file_pembahasan)

      this.$http.post(`/ujian/${this.$route.params.id_ujian}/soal`, data).then(response => {
        if (response.data.status) {
          this.$toast({
            component: ToastificationContent,
            props: {
              title: response.data.message,
              icon: 'EditIcon',
              variant: 'success',
            },
          })
          setTimeout(() => {
            this.$router.push({ name: 'soal-index' })
          }, 500)
        } else {
          this.$toast({
            component: ToastificationContent,
            props: {
              title: response.data.message,
              icon: 'EditIcon',
              variant: 'danger',
            },
          })
        }
      })
    },
  },
}

</script>

<style lang="scss">
@import '@core/scss/vue/libs/vue-select.scss';
</style>
