<template>
    <article class="container">
        <section>
            <h3>About </h3>
            <p>aodashdaosihdhadhiaoi</p>
        </section>
        <section>
            <h3>Contact Us</h3>
            <p>Kruthusgatan 17, 411 04 Göteborg.</p>
            <p>Tel:</p>
            <p>E-mail:</p>
        </section>
        <section>
            <h3>Follow Us</h3>
            <p>Facebook</p>
            <p>Instagram</p>
            <p>Twitter</p>
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
    }

    .contact {
        border-left: 1px solid black;
        border-right: 1px solid black;
    }
</style>