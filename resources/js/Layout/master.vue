<template>
    <main>
        <header>
            <Link href="/">Home</Link>
            <Link href="/about">About</Link>
            <Link href="/contact">Contact</Link>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script>
import { Link } from '@inertiajs/vue2'

export default {
    components: {
        Link,
    }
}
</script>
