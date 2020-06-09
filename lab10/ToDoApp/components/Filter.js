import React from "react"

function Filter(props) {
    return (
        <label>
            <input 
                type="checkbox"
                name="isFiltered"
                onChange={props.handleChange}
                checked={props.data.isFiltered}
            /> hide completed
        </label>
    )
}

export default Filter