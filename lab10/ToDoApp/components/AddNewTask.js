import React from "react"

function AddNewTask(props) {
    return (
        <label>
            <input 
                name="newToDo" 
                value={props.data.newToDo} 
                onChange={props.handleNewToDo} 
            />
            <button 
                onClick={props.handleButtonClick}>Add</button>
        </label>
    )
}

export default AddNewTask