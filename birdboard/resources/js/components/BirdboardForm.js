class BirdboardForm {
    constructor(data) {
        this.originalData = {};
        this.originalData = JSON.parse(JSON.stringify(data));

        Object.assign(this, data);

        this.errors = {};
    }

    data() {
        return Object.keys(this.originalData).reduce((data, attribute) => {
            data[attribute] = this[attribute];
            return data;
        }, {})
    }

    post() {
        this.submit(endpoint);
    }

    patch() {
        this.submit(endpoint, 'patch');
    }

    delete() {
        this.submit(endpoint, 'delete');
    }

    submit(endpoint, requestType = 'post') {
        return axios[requestType](endpoint, this.data())
            .catch(this.onFail.bind(this))
            .then(this.onSuccess.bind(this));
    }

    onSuccess(response) {
        this.submitted = true;
        this.errors = {};

        return response;
    }

    onFail(error) {
        this.errors = error.response.data.errors;
        this.submitted = false;

        throw error;
    }

    reset() {
        object.assign(this, this.originalData);
    }
}

export default BirdboardForm;
