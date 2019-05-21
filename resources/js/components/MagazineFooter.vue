<template>
    <article class="container">
        <section>
            <h3>About </h3>
            <p>aodashdaosihdhadhiaoi</p>
        </section>
        <section>
            <h3>Contact Us</h3>
            <ul>
                <li>Kruthusgatan 17, 411 04 Göteborg.</li>
                <li>Tel:</li>
                <li>E-mail:</li>
            </ul>
        </section>
        <section>
            <h3>Follow Us</h3>
            <ul>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Twitter</li>
            </ul>
        </section>
    </article>
</template>

<style scoped>
    .container {
        display: flex;
        flex-direction: row;
        background: #eee;
        width: 100%;
    }

    section {
        flex: 1;
        text-align: center;
        background: green;
    }

    .contact {
        border-left: 1px solid black;
        border-right: 1px solid black;
    }

    h3 {
        padding: 2rem;
    }
</style>