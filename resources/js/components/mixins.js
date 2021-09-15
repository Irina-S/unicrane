export const stepMixin = {
    data() {
        return {
            stepValue: ''
        }
    },
    computed: {
        isNextBtnDisabled: function() {
            if (this.stepValue == '')
                return true
            else
                return false;
        }
    },
}

export const cardMixin = {
    data: function() {
        return {
            checkedClass: 'choose-crane-type__item-select',
            hideClass: 'choose-crane-type__item-hide'
        }
    },
    computed: {
        isChecked: function() {
            return this.curVal == this.value;
        }
    },
    mounted: function() {
        this.$refs.input.checked = false;
    }
}

export const inputMixin = {
    computed: {
        inputVal: {
            get() {
                return this.value;
            },
            set(val) {
                this.$emit('input', { value: val, valueName: this.title });
            }
        }
    }
}

export const storeMixin = {
    computed: {
        isUnderslung: function() {
            return this.$store.state.calculate.type == 'underslung' ? true : false;
        },
        isSupported: function() {
            return this.$store.state.calculate.type == 'supported' ? true : false;
        }
    }
}

export const calcMixin = {
    data() {
        return {
            activeClass: 'active',
            hideClass: 'hidden'
        }
    }
}