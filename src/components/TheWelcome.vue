<script setup>
import WelcomeItem from './WelcomeItem.vue'
import DocumentationIcon from './icons/IconDocumentation.vue'
import ToolingIcon from './icons/IconTooling.vue'
import EcosystemIcon from './icons/IconEcosystem.vue'
import CommunityIcon from './icons/IconCommunity.vue'
import SupportIcon from './icons/IconSupport.vue'
import 'vue';
import '@fortawesome/fontawesome-free/css/all.css';
</script>

<style>
#welcom{
  color:white;
}
#diri31 {
            height: 350px;
            width: 350px;
            display: flex;
            display: inline-block;
            margin-left: 100px;
            margin-top: 30px;
            color: white;

        }
        
        #diri4 {
            text-align: center;
            margin-top: 5px;
            position: relative;
           
        }
        
        #diri43 {
            text-align: center;
            margin-top: 5px;
            position: relative;
            color: gold;
            font-weight: bold; 
            gap: 2px;
           
        }
        #koma{
       color:gold;

    }
    
    table {
            margin-top: 10px;
    }
    #ikon{
        margin-left: 100px;
        margin-top: -59px;
        height: 60px;
        display: flex;
        justify-content: 70px;
        transition: transform 1.4s;
      
    }
    .social-icon {
        font-size: 24px; /* Ukuran ikon */
        margin: 0 10px; /* Menambahkan margin horizontal di sekitar ikon */
    }
    #ikon :hover{
        transform: scale(1.3);
        transition: transform 1.4s;
    }



</style>

<template>
   
    <li id="diri31">
                <h2 id="diri43">Tentang saya</h2>
                <p id="diri4"><i id="loremText">
    Saya berasal dari pekanbaru dan saat ini sedang berkuliah di Universita islam Riau, saat ini saya semester 4
    dan saya sedang berfokus untuk mempelajari pemrograman web</i>
                        <p id="koma">
                            <b>.............................................................................................................</b>
                        </p>
                    </p>

                <table>
                    <tr>
                        <th>D.O.B</th>
                        <th>:</th>
                        <td>23-04-2002</td>
                    </tr>

                    <tr>
                        <th>PHONE</th>
                        <th>:</th>
                        <td>+6281364219425</td>
                    </tr>

                    <tr>
                        <th>ADDRESS</th>
                        <th>:</th>
                        <td>Pekanbaru, Riau, ID</td>
                    </tr>

                    <tr>
                        <th>E-MAIL</th>
                        <th>:</th>
                        <td>ricofranjes@gmail.com</td>
                    </tr>

                </table>
            </li> 
            <div><br>

                <div id="ikon">
                <a href="https://www.instagram.com/p/C4mma4UL4On/?igsh=YmtoZ2pqdGprcG9w" target="_blank">
                    <i class="fab fa-instagram social-icon"></i>
                </a>

                <a href="https://www.facebook.com/riko.franjeslee" target="_blank">
                    <i class="fab fa-facebook social-icon"></i>
                </a>
            </div>
  </div>
</template>


<style scoped>
.social-icon {
  font-size: 24px; /* Sesuaikan ukuran ikon sesuai kebutuhan */
  margin-right: 10px; /* Jarak antara ikon */
}
</style>
