Vue.component('app-login', {
    props: ['token', 'error'],
    data() {
        return {
            loginForm: false
        }
    },


    template: `
        <div>
            <template v-if="loginForm">
            <div style="width:200px">
                <form action="/user/signin" method="post">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input autofocus size="200px" type="email" class="form-control form-control-sm" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-dark btn-sm">Submit</button>
                <!--<button type="button" class="btn btn-sm btn-dark" @click="loginForm=false">Cancel</button>-->
                <a  class="btn btn-sm btn-dark" href="\">Cancel</a>

                <input type="hidden" name="_token" :value="token">
                </form>
            </div>
        
            </template>
            <template v-else>
                <button class="btn btn-large btn-dark" @click="loginForm=true">Sign In</button>
                <p v-if="error>0"><br><br>invalid email or password</p>
            </template>
         </div>
    `


});


new Vue({
    el: '#app-root',

});
