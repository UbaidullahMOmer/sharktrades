<template>
	<div class="col-1">
        <form @click.prevent="onsubmit" class="m-0">
                <div>
                    <svg
                        alt="Get OTP code"
                        type="submit"
                        @click="this.sendOTP()"
                        :class="{getCodeButtonActive: active}"
                        xmlns="http://www.w3.org/2000/svg" fill="white" width="30" height="30" enable-background="new 0 0 512 512" viewBox="0 0 512 512" id="password"><path d="M435.7,343.218H77.269c-31.44,0-57.019-25.567-57.019-56.994v-59.492c0-31.427,25.579-56.995,57.019-56.995H435.7
				c31.44,0,57.02,25.568,57.02,56.995v59.492C492.72,317.65,467.141,343.218,435.7,343.218z M77.269,182.207
				c-24.564,0-44.548,19.974-44.548,44.524v59.492c0,24.551,19.984,44.523,44.548,44.523H435.7
				c24.564,0,44.549-19.973,44.549-44.523v-59.492c0-24.551-19.984-44.524-44.549-44.524H77.269z"></path><path d="M128.531 294.013c-1.928 0-3.829-.891-5.049-2.57l-15.259-21.001-15.345 21.013c-2.031 2.781-5.931 3.391-8.713 1.358-2.781-2.03-3.389-5.932-1.358-8.712l15.327-20.989-24.785-8.093c-3.273-1.069-5.061-4.59-3.992-7.863s4.587-5.062 7.863-3.992l24.769 8.089-.034-26.067c-.004-3.443 2.784-6.238 6.227-6.243.003 0 .006 0 .008 0 3.44 0 6.231 2.786 6.235 6.228l.034 26.085 24.731-8.09c3.274-1.067 6.795.716 7.865 3.988 1.071 3.273-.715 6.794-3.988 7.865l-24.754 8.097 15.256 20.998c2.024 2.786 1.407 6.686-1.379 8.709C131.085 293.626 129.802 294.013 128.531 294.013zM221.521 294.013c-1.925.001-3.824-.889-5.044-2.563l-15.313-21.018-15.352 21.022c-2.031 2.781-5.931 3.391-8.713 1.358-2.781-2.03-3.389-5.931-1.358-8.712l15.327-20.99-24.774-8.093c-3.273-1.069-5.061-4.59-3.991-7.863 1.069-3.272 4.589-5.06 7.863-3.99l24.756 8.087-.034-26.066c-.004-3.443 2.784-6.238 6.227-6.243.003 0 .006 0 .008 0 3.44 0 6.231 2.786 6.235 6.228l.034 26.085 24.731-8.09c3.275-1.067 6.794.716 7.865 3.988 1.071 3.273-.715 6.794-3.988 7.865l-24.743 8.093 15.297 20.995c2.028 2.783 1.416 6.684-1.368 8.711C224.081 293.624 222.795 294.013 221.521 294.013zM273.761 294.013c-1.273 0-2.558-.388-3.665-1.195-2.784-2.026-3.397-5.927-1.371-8.711l15.287-20.992-24.785-8.097c-3.273-1.069-5.06-4.59-3.991-7.863 1.07-3.272 4.591-5.06 7.863-3.99l24.769 8.09v-26.077c0-3.443 2.791-6.235 6.234-6.235 3.444 0 6.236 2.792 6.236 6.235v26.075l24.732-8.088c3.275-1.069 6.793.717 7.864 3.989 1.07 3.272-.716 6.794-3.989 7.864l-24.752 8.094 15.296 20.994c2.028 2.783 1.416 6.684-1.367 8.711-2.785 2.027-6.685 1.415-8.711-1.367l-15.308-21.009-15.297 21.008C277.586 293.124 275.686 294.013 273.761 294.013zM448.776 308.779H386.9c-7.162 0-12.988-5.822-12.988-12.979v-44.821c0-7.157 5.826-12.979 12.988-12.979h61.876c7.162 0 12.988 5.822 12.988 12.979V295.8C461.765 302.957 455.938 308.779 448.776 308.779zM386.9 250.47c-.287 0-.518.278-.518.509V295.8c0 .28.232.509.518.509h61.876c.285 0 .518-.229.518-.509v-44.821c0-.235-.226-.509-.518-.509H386.9z"></path><path d="M441.223 250.47h-46.769c-3.443 0-6.235-2.792-6.235-6.235v-23.4c0-16.34 13.301-29.633 29.649-29.633 16.315 0 29.59 13.293 29.59 29.633v23.4C447.458 247.678 444.666 250.47 441.223 250.47zM400.689 237.999h34.298v-17.165c0-9.463-7.68-17.162-17.119-17.162-9.473 0-17.179 7.699-17.179 17.162V237.999zM417.868 278.536c-6.019 0-10.915-4.892-10.915-10.903 0-5.986 4.896-10.856 10.915-10.856 5.985 0 10.855 4.87 10.855 10.856C428.724 273.645 423.854 278.536 417.868 278.536zM417.868 266.065c-.891 0-1.615.703-1.615 1.567 0 .89.725 1.614 1.615 1.614.857 0 1.556-.725 1.556-1.614C419.424 266.783 418.711 266.065 417.868 266.065z"></path><path d="M417.868,290.758c-3.443,0-6.235-2.792-6.235-6.235V273.39c0-3.443,2.792-6.235,6.235-6.235s6.235,2.792,6.235,6.235
				v11.133C424.104,287.966,421.312,290.758,417.868,290.758z"></path></svg>

                </div>
        </form>
<!--		<div class="d-flex flex-column text-center text-white" v-else >Press button below to receive OTP on your email</div>-->
	</div>
    <template v-if="active">
        <div class="d-flex flex-column text-center pt-3">
            <div class="timer text-white">{{ this.extractTimeAndSecconds() }}</div>
            <div class="text-white">We have send OTP on your email.</div>
            <div v-bind:style="{fontSize: '10px', color: '#ffffff'}"><i>Please provide OTP code before the time expires!</i></div>
        </div>
    </template>


</template>

<script>
import axios from "axios";

export default {
    name: "EMAIL_Verification",
	props: {
		otpreason: {
			type: String,
			required: true
		}
	},
    data() {
        return {
			requesting: false,
			active: false,
            timer: 0,
        };
    },
	watch: {
		timer: {
			handler(newTimer){
				if(this.active && newTimer > 0){
					setTimeout(() => this.decreseSecconds() , 1000)
				} else {
					this.active = false
				}
			},
			immediate: false
		}
	},
	methods: {
		sendOTP(){
			if(this.requesting) return;
			this.requesting = true;

			if(this.timer == 0){
				axios({
					baseURL: '/email-otp',
					method: 'POST',
					headers: {
						'Accept': 'application/json',
						'Content-Type': 'application/json;',
						'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
					},
					data: {reason: this.otpreason}
				}).then(res => {
					if(res.status === 200){
						this.active = true;
						this.requesting = false;
						this.timer = 120;
					} else {
						this.requesting = false;
						this.$toast.error('Something Went Wrong!!');
					}
				}).error(e => {
					this.requesting = false;
					this.$toast.error('Something Went Wrong!!');
				})
			}
		},
		extractTimeAndSecconds(){
			let secs = this.timer > 60 ? this.timer - 60 : this.timer;
			if(secs == 60)
				secs = 0
			let mins = Math.floor(this.timer / 60);

			return (mins < 10 ? '0' + mins : mins ) + ":" + (secs < 10 ? '0' + secs : secs)
		},
		decreseSecconds(){
			this.timer -= 1;
		}
	}
}
</script>

<style scoped>

.getCodeButtonActive{
    fill: #10cef2;
}
</style>
