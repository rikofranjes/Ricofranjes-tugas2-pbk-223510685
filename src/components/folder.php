
<style>

#diri {
    background-color: red;
    box-shadow: 0 0 4px rgba(0, 0, 0, 1);
}

#diri2 {
    background-image: url('img/bahanbakar/fu2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    box-shadow: 0 0 4px rgba(0, 0, 0, 1);
    height: 28vh;
    /* atau atur sesuai kebutuhan tinggi elemen */
    height: 720px;
    justify-content: center;
    float: center;
}

#diri3 {
    height: 350px;
    width: 350px;
    box-shadow: 0 0 40px rgba(0, 0, 0, 30);
    display: flex;
    display: inline-block;
    margin-left: 350px;
    margin-top: 100px;
    color: white;

}

#diri31 {
    height: 350px;
    width: 350px;
    display: flex;
    display: inline-block;
    margin-left: 100px;
    margin-top: 100px;
    color: white;

}

.diri33 {
    height: 150px;
    width: 150px;
    box-shadow: 0 0 4px rgba(0, 0, 0, 1);
    margin-left: 99px;
    margin-top: 13px;
    border-radius: 47%;
    color: white;
}

.diri333 {
    text-align: center;
}

.diri3333 {
    text-align: center;
    color: gold;
}

#diri4 {
    text-align: center;
    margin-top: 100px;
    position: relative;
}

#diri4 i {
    position: absolute;
    right: -30px;
    top: -90px;
    color: white;
    cursor: pointer;
}

table {
    margin-top: -74px;
}

.fas{
    margin-top:82px;
    margin-right:70px;
}

#diri5{
width: 135px;
margin-top:69px;
margin-left:125px;
color:white;
}
#diri55{
text-decoration: none; 

}
#koma{
color:gold;

}

/*=====================================================================================================*/
.copyright {
font-size: 12px;
background-color:black;
justify-content: center; 
color: gray;
height: 53px;
display: flex; 
}
#data5{
height: 40px;
background-color:silver;
justify-content: center; 

}

</style>



<div id="diri">
<div id="diri2">

    <li id="diri3">
        <img src="img/bahanbakar/saya.jpg" alt="" class="diri33">
        <h1 class="diri333">Rico franjes</h1>
        <h5 class="diri3333">WEB DEVELOPER</h5>
    </li>

    <li id="diri31">
        <h2 id="diri4">Career Goal <i class="fas fa-language" onclick="translateToIndonesian()"></i></h2>
        <p id="diri4"><i id="loremText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dignissim velit sed nibh placerat,
                non aliquam purus pretium. Donec at justo dignissim, maximus elit et, vestibulum mi.</i>
                <p id="koma">
                    <b>...............................................................................................</b>
                </p>
            </p>

        <table>
            <tr>
                <th>D.O.B</th>
                <th>:</th>
                <td>23-04-2002</td>
            </tr><br>

            <tr>
                <th>PHONE</th>
                <th>:</th>
                <td>+6281364219425</td>
            </tr><br>

            <tr>
                <th>ADDRESS</th>
                <th>:</th>
                <td>Pekanbaru, Riau, ID</td>
            </tr><br>

            <tr>
                <th>E-MAIL</th>
                <th>:</th>
                <td>ricofranjes@gmail.com</td>
            </tr><br>

        </table>
    </li> 
    <div id="diri5">
        <tr >
            <th><a href="mobil.php"id="diri55" >Home</a></th>
            <th >/</th>
            <td >Kontak Saya</td><hr />
        </tr>
    </div>
</div>
<div id="data5">
    <li  class="copyright">
        <p>
            Hak Cipta ©Ricofranjes 2024. Semua Hak Cipta Dilindungi
        </p>
    </li>
</div>
</div>

<!-- Script to change language -->
<script>
function translateToIndonesian() {
    
    var lorem = document.querySelector('#loremText');
    lorem.textContent = 'Pelanggan itu sangat penting, pelanggan akan diikuti oleh pelanggan. Dia menginginkan tingkat martabat tetapi dia menginvestasikan tingkat tersebutbukan harga murni. Sampai saat itu, investasi yang tepat, pengembang terbesar dan investasi saya';


    var tableRows = document.querySelectorAll('table tr');
    tableRows.forEach(row => {
        switch (row.children[0].textContent) {
            case 'D.O.B':
                row.children[0].textContent = 'Tanggal Lahir';
                break;
            case 'PHONE':
                row.children[0].textContent = 'Telepon';
                break;
            case 'ADDRESS':
                row.children[0].textContent = 'Alamat';
                break;
            case 'E-MAIL':
                row.children[0].textContent = 'Email';
                break;
        }
    });

}
</script>
