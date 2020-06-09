import React from "react"

function Task(props) {
    const completedStyle = {
        textDecoration: "line-through",
        fontStyle: "italic"
    }
    
    return (
         <div className="to-do">
            <label style={props.done ? completedStyle: null}>
            <input
                type="checkbox" 
                checked={props.done} 
                onChange={() => props.handleChange(props.id)}
                />
            {" "+props.task}
            </label> 
        </div>
    )
}

export default Task