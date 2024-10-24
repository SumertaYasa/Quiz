<template>
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
      <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-3xl font-bold mb-1 text-center">Selamat Datang</h1>
        <p class="text-gray-600 mb-8 text-center">
          Silahkan masukan email, NIP, NIM dan password untuk masuk ke halaman
          dashboard
        </p>
  
        <!-- Error Alert -->
        <div
          v-if="errors.length"
          class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
          role="alert"
        >
          <ul>
            <li v-for="error in errors" :key="error">{{ error }}</li>
          </ul>
        </div>
  
        <form @submit.prevent="handleSubmit">
          <div class="mb-4">
            <label
              for="email"
              class="block text-sm font-medium text-gray-700 mb-1"
            >
              Email / NIP / NIM
            </label>
            <input
              type="text"
              id="email"
              v-model="formData.email"
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              required
            />
          </div>
  
          <div class="mb-6">
            <label
              for="password"
              class="block text-sm font-medium text-gray-700 mb-1"
            >
              Password
            </label>
            <div class="relative">
              <input
                :type="passwordFieldType"
                id="password"
                v-model="formData.password"
                ref="passwordInput"
                class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
              />
              <button
                type="button"
                @click="togglePasswordVisibility"
                class="absolute inset-y-0 right-0 pr-3 flex items-center"
              >
                <i
                  :class="['fas', passwordFieldType === 'password' ? 'fa-eye' : 'fa-eye-slash', 'text-gray-500']"
                ></i>
              </button>
            </div>
          </div>
  
          <div class="flex items-center mb-6">
            <input
              type="checkbox"
              id="remember"
              v-model="formData.remember"
              class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
            />
            <label for="remember" class="ml-2 block text-sm text-gray-700">
              Ingat saya?
            </label>
          </div>
  
          <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
          >
            Masuk
          </button>
        </form>
  
        <div class="mt-4 text-center flex flex-col gap-y-2">
          <router-link
            to="/forgot-password"
            class="text-sm text-blue-600 hover:underline"
          >
            Lupa Password?
          </router-link>
          <a 
            href="/"
            class="text-sm text-blue-600 hover:underline font-bold"
          >
            Kembali ke Beranda
          </a>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'LoginForm',
    data() {
      return {
        formData: {
          email: '',
          password: '',
          remember: false
        },
        passwordFieldType: 'password',
        errors: []
      }
    },
    mounted() {
      // Initialize any DOM-related functionality if needed
      this.initializePasswordToggle()
    },
    methods: {
      initializePasswordToggle() {
        // This method is kept for potential DOM-related initializations
        // Most functionality is now handled reactively
      },
      togglePasswordVisibility() {
        // Toggle between password and text
        this.passwordFieldType = this.passwordFieldType === 'password' ? 'text' : 'password'
      },
      async handleSubmit() {
        try {
          this.errors = []
          // Replace with your actual API endpoint
          const response = await this.$axios.post('/api/login', this.formData)
  
          // Handle successful login
          this.$router.push('/dashboard')
        } catch (error) {
          // Handle errors
          if (error.response?.data?.errors) {
            this.errors = Object.values(error.response.data.errors).flat()
          } else {
            this.errors = ['An error occurred while logging in']
          }
        }
      }
    }
  }
  </script>  