<template>
    <div style="margin-top: 400px">
        <p> The current time is {{ $page.props.time }}.</p>


        <Link
            href="/users"
            class="text-blue-500 hover:underline"
            preserve-scroll
        >
            Refresh
        </Link>
    </div>
</template>

<script>

</script>
