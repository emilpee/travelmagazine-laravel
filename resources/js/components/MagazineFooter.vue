<template>
    <div class="foot">
        <section>
            <h3>Get the news first</h3>
            <label>Email
            <input type="email" id="email"><br>
            </label>
            <div class="checkbox">
                <input type="checkbox" id="checkbox_news">
                <label for="checkbox_news">I agree with all condition</label>
            </div>
            <input type="submit" id="submit">
        </section>
        <section>
            <h3>Contact Us</h3>
            <p>Kruthusgatan 17</p>
            <p>411 04 Göteborg</p>
            <p>Tel: 0022-22000</p>
            <p>E-mail: info@taravel.com</p>
        </section>
        <section>
            <h3>Follow Us</h3>
            <ul>
                <li>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Facebook_logo_%28square%29.png">
                    Facebook
                </li>
                <li>Instagram</li>
                <li>Twitter</li>
            </ul>
        </section>
    </div>
</template>

<style scoped>

    .foot {
        margin:0;
        display: flex;
        flex-direction: row;
        background: #FFA7A7;
        max-width: 100vw;
        width: 100%;
    }

    section {
        flex: 1;
        text-align: left;
        padding: 1rem;
        display: flex;
        align-items: center;
        flex-direction: column;
        border-left: 1px solid black;
    }

    h3 {
        font-size: 1.6em;
    }


    p, li {
        margin: 0;
        line-height: 1.7em;
    }

    #submit {
        color: grey;
        text-decoration: none;
        border: rgb(80, 79, 79) 1px solid;

    }

    #submit:hover {
        background: rgb(65, 59, 59);  
    }
   
    #checkbox_news{
        display: none;
    }

    .checkbox {
        padding: 1rem 0;
    }

    .checkbox label::before{
        content: "";
        background: white;
        display: inline-block;
        height: 16px;
        width: 16px;
        border: 1px solid;
        margin: 0 .6rem  0 0;
    }
    .checkbox label::after {
        background: #FFA7A7;
    }
    .contact {
        border-left: 1px solid black;
        border-right: 1px solid black;
    }
/*     h3 {
        font-weight: 700;
    } */
    ul {
        list-style: none;
        padding: 0;
    }

    img {
        width: 2rem;
    }

</style>