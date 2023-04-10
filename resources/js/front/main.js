import Swal from "sweetalert2";

const app =(() => {
    const testAlert = () => {
        Swal.fire('labas');
    }

    return {
        init: () => {
            testAlert()
        },
    };
})();
export default app;