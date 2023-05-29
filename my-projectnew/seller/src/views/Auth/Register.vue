<template>
  <div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">

      <!-- Register v1 -->
      <b-card>
        <b-link class="brand-logo">
          <vuexy-logo />
          <h2 class="brand-text text-primary ml-1">
            Vuexy
          </h2>
        </b-link>

        <b-card-title class="mb-1">
          Daftar Sebagai Seller
        </b-card-title>

        <!-- form -->
        <validation-observer ref="registerForm">
          <b-form
            class="auth-register-form mt-2"
            @submit.prevent="validationForm"
          >
            <!-- nama -->
            <b-form-group
              label="Nama"
              label-for="nama"
            >
              <validation-provider
                #default="{ errors }"
                name="Nama"
                rules="required"
              >
                <b-form-input
                  id="nama"
                  v-model="nama"
                  :state="errors.length > 0 ? false:null"
                  name="register-nama"
                  placeholder="Sugeng Santoso"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <!-- email -->
            <b-form-group
              label="Email"
              label-for="email"
            >
              <validation-provider
                #default="{ errors }"
                name="Email"
                rules="required|email"
              >
                <b-form-input
                  id="email"
                  v-model="regEmail"
                  :state="errors.length > 0 ? false:null"
                  name="register-email"
                  placeholder="john@example.com"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <!-- password -->
            <b-form-group
              label="Password"
              label-for="password"
            >
              <validation-provider
                #default="{ errors }"
                name="Password"
                rules="required"
              >
                <b-input-group
                  class="input-group-merge"
                  :class="errors.length > 0 ? 'is-invalid':null"
                >
                  <b-form-input
                    id="password"
                    v-model="password"
                    :type="passwordFieldType"
                    :state="errors.length > 0 ? false:null"
                    class="form-control-merge"
                    name="register-password"
                    placeholder="············"
                  />
                  <b-input-group-append is-text>
                    <feather-icon
                      :icon="passwordToggleIcon"
                      class="cursor-pointer"
                      @click="togglePasswordVisibility"
                    />
                  </b-input-group-append>
                </b-input-group>
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="Profesi"
              label-for="profesi"
            >
              <validation-provider
                #default="{ errors }"
                name="Profesi"
                rules="required"
              >
                <b-form-input
                  id="profesi"
                  v-model="profesi"
                  :state="errors.length > 0 ? false:null"
                  name="register-profesi"
                  placeholder="Pedagang Kelontong"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="Jenis Kelamin"
              label-for="jenis_kelamin"
            >
              <validation-provider
                #default="{ errors }"
                name="Jenis Kelamin"
                rules="required"
              >
                <b-form-select
                  v-model="jenis_kelamin"
                  :options="jenis_kelamin_menu"
                  :state="errors.length > 0 ? false:null"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="No Telpon"
              label-for="no_telp"
            >
              <validation-provider
                #default="{ errors }"
                name="Nomor Telepon"
                rules="required"
              >
                <b-form-input
                  id="no_telp"
                  v-model="no_telp"
                  :state="errors.length > 0 ? false:null"
                  name="register-no-telp"
                  placeholder="08123456"
                  type="number"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="No Telpon"
              label-for="no_telp"
            >
              <validation-provider
                #default="{ errors }"
                name="Tanggal Lahir"
                rules="required"
              >
              <b-form-datepicker
                id="tanggal-lahir"
                v-model="tanggal_lahir"
                class="mb-1"
                :state="errors.length > 0 ? false:null"
              />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="NIK"
              label-for="nik"
            >
              <validation-provider
                #default="{ errors }"
                name="nik"
                rules="required"
              >
                <b-form-input
                  id="nik"
                  v-model="nik"
                  :state="errors.length > 0 ? false:null"
                  name="register-nik"
                  placeholder="35123456789"
                  type="number"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="Foto KTP"
              label-for="foto_ktp"
            >
              <validation-provider
                #default="{ errors }"
                name="Foto KTP"
                rules="required"
              >
                <b-form-file
                  id="foto_ktp"
                  accept="image/*"
                  v-model="foto_ktp"
                  :state="errors.length > 0 ? false:null"
                  name="register-foto-ktp"
                />

                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="Foto Wajah"
              label-for="foto_wajah"
            >
              <validation-provider
                #default="{ errors }"
                name="Foto Wajah"
                rules="required"
              >
                <b-form-file
                  id="foto_wajah"
                  accept="image/*"
                  v-model="foto_wajah"
                  :state="errors.length > 0 ? false:null"
                  name="register-foto-wajah"
                />

                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="Provinsi"
              label-for="provinsi"
            >
              <validation-provider
                #default="{ errors }"
                name="Provinsi"
                rules="required"
              >
                <b-form-select
                  v-model="provinsi"
                  :options="provinsiMenu.map(item => item.name)"
                  :state="errors.length > 0 ? false : null"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="Kabupaten / Kota"
              label-for="kota"
            >
              <validation-provider
                #default="{ errors }"
                name="Kota / Kabupaten"
                rules="required"
              >
                <b-form-select
                  v-model="kota_kabupaten"
                  :options="provinsiMenu.map(item => item.name)"
                  :state="errors.length > 0 ? false : null"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="Kecamatan"
              label-for="kecamatan"
            >
              <validation-provider
                #default="{ errors }"
                name="Kecamatan"
                rules="required"
              >
                <b-form-select
                  v-model="kecamatan"
                  :options="provinsiMenu.map(item => item.name)"
                  :state="errors.length > 0 ? false : null"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <b-form-group
              label="Alamat Lengkap"
              label-for="alamat_lengkap"
            >
              <validation-provider
                #default="{ errors }"
                name="Alamat Lengkap"
                rules="required"
              >
                <b-form-textarea
                  id="alamat_lengkap"
                  v-model="alamat_lengkap"
                  :state="errors.length > 0 ? false:null"
                  name="alamat_lengkap"
                  placeholder="JL. Soekarno Hatta 66"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <!-- checkbox -->
            <b-form-group>
              <b-form-checkbox
                id="register-privacy-policy"
                v-model="status"
                name="checkbox-1"
              >
                I agree to
                <b-link>privacy policy & terms</b-link>
              </b-form-checkbox>
            </b-form-group>

            <!-- submit button -->
            <b-button
              variant="primary"
              block
              type="submit"
            >
              Sign up
            </b-button>
          </b-form>
        </validation-observer>

        <b-card-text class="text-center mt-2">
          <span>Already have an account? </span>
          <b-link :to="{name:'auth-login-v1'}">
            <span>Sign in instead</span>
          </b-link>
        </b-card-text>
      </b-card>
    <!-- /Register v1 -->
    </div>
  </div>

</template>

<script>
import { ValidationProvider, ValidationObserver } from 'vee-validate'
import {
  BCard, BLink, BCardTitle, BCardText, BForm, BFormSelect, BFormDatepicker, BFormFile,
  BButton, BFormInput, BFormGroup, BInputGroup, BInputGroupAppend, BFormCheckbox, BFormTextarea,
} from 'bootstrap-vue'
import VuexyLogo from '@core/layouts/components/Logo.vue'
import { required, email } from '@validations'
import { togglePasswordVisibility } from '@core/mixins/ui/forms'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'

export default {
  components: {
    VuexyLogo,
    // BSV
    BCard,
    BLink,
    BCardTitle,
    BCardText,
    BForm,
    BButton,
    BFormInput,
    BFormGroup,
    BInputGroup,
    BInputGroupAppend,
    BFormCheckbox,
    BFormSelect,
    BFormDatepicker,
    BFormFile,
    BFormTextarea,
    // validations
    ValidationProvider,
    ValidationObserver,
  },
  mixins: [togglePasswordVisibility],
  data() {
    return {
      regEmail: '',
      username: '',
      password: '',
      status: '',
      foto_wajah: '',
      foto_ktp: '',
      jenis_kelamin: null,
      jenis_kelamin_menu: [
        { value: 'L', text: 'Laki-laki' },
        { value: 'P', text: 'Perempuan' },
      ],
      tanggal_lahir: '',
      provinsiMenu: [],
      kotaMenu: [],
      kecamatanMenu: [],
      provinsi: '',
      kota_kabupaten: '',
      kecamatan: '',

      // validation rules
      required,
      email,
    }
  },
  computed: {
    passwordToggleIcon() {
      return this.passwordFieldType === 'password' ? 'EyeIcon' : 'EyeOffIcon'
    },
  },
  mounted() {
    this.getProvinsiData()
  },
  methods: {
    getProvinsiData() {
      fetch('http://dev.farizdotid.com/api/daerahindonesia/provinsi')
        .then(response => response.json())
        .then(data => {
          const provinces = data.provinsi
          this.provinsiMenu = provinces.map(province => ({
            id: province.id,
            name: province.nama,
          }))
        })
        .catch(error => {
          console.error(error)
        })
    },
    validationForm() {
      this.$refs.registerForm.validate().then(success => {
        if (success) {
          this.$toast({
            component: ToastificationContent,
            props: {
              title: 'Form Submitted',
              icon: 'EditIcon',
              variant: 'success',
            },
          })
        }
      })
    },
  },
}
</script>

<style lang="scss">
@import '@core/scss/vue/pages/page-auth.scss';
</style>
